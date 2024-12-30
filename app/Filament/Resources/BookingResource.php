<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use App\Models\Hotel;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;
use NumberFormatter;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Customer Details')
                    ->schema([
                        Forms\Components\Select::make('user_id')
                            ->label('Customer')
                            ->relationship('user', 'name')
                            ->required(),
                        Forms\Components\Select::make('hotel_id')
                            ->label('Hotel')
                            ->relationship('hotel', 'name')
                            ->live()
                            ->afterStateHydrated(function ($state, $set) {
                                $hotel = \App\Models\Hotel::find($state);

                                $set('price_per_night', $hotel->price_per_night ?? null);
                            })
                            ->afterStateUpdated(function ($state, $set, $get) {
                                if ($state) {
                                    // Ambil harga per malam dari hotel yang dipilih
                                    $hotel = \App\Models\Hotel::find($state);
                                    $pricePerNight = $hotel->price_per_night ?? 0;

                                    // Set harga per malam
                                    $set('price_per_night', NumberFormatter::create('id_ID', NumberFormatter::DECIMAL)->format($pricePerNight * 1000));

                                    // Kalkulasi ulang total price
                                    $totalNights = (int) $get('total_nights');
                                    $totalRooms = (int) $get('number_of_rooms');

                                    if ($totalNights && $totalRooms) {
                                        $totalPrice = $totalRooms * $totalNights * $pricePerNight;
                                        $set('total_price', NumberFormatter::create('id_ID', NumberFormatter::DECIMAL)->format($totalPrice * 1000));
                                    }
                                }
                            })
                            ->required(),
                    ])
                    ->collapsible(),

                Section::make('Order Details')
                    ->schema([
                        Forms\Components\DatePicker::make('check_in_date')
                            ->label('Check-In Date')
                            ->displayFormat('d-m-Y')
                            ->closeOnDateSelection()
                            ->native(false)
                            ->required(),
                        Forms\Components\DatePicker::make('check_out_date')
                            ->label('Check-Out Date')
                            ->displayFormat('d-m-Y')
                            ->closeOnDateSelection()
                            ->live()
                            ->afterStateHydrated(function ($state, $set, $get) {
                                $checkOutDate = \Carbon\Carbon::parse($state);
                                $checkInDate = \Carbon\Carbon::parse($get('check_in_date'));
                                $totalNights = $checkOutDate->diffInDays($checkInDate);
                                $set('total_nights', $totalNights);
                            })
                            ->afterStateUpdated(function ($state, $set, $get) {
                                $checkOutDate = \Carbon\Carbon::parse($state);
                                $checkInDate = \Carbon\Carbon::parse($get('check_in_date'));

                                if ($checkOutDate && $checkInDate) {
                                    $diff = $checkOutDate->diff($checkInDate);
                                    $diffInDays = $diff->days; // Mengambil jumlah hari
                                    $diffInDays = $diffInDays == 0 ? 1 : $diffInDays;
                                    $set('total_nights', $diffInDays);
                                } else {
                                    $set('total_nights', 0);
                                }

                                $totalRooms = (int) $get('number_of_rooms');
                                $hotel = \App\Models\Hotel::find($get('hotel_id'));
                                $pricePerNight = $hotel->price_per_night ?? 0;
                                // $pricePerNight = (float) $get('price_per_night');
                                $totalNights = (int) $get('total_nights');

                                if ($totalRooms && $totalNights && $pricePerNight) {
                                    $totalPrice = $totalRooms * $totalNights * $pricePerNight;
                                    $set('total_price', NumberFormatter::create('id_ID', NumberFormatter::DECIMAL)->format($totalPrice * 1000));
                                }
                            })
                            ->native(false)
                            ->required(),
                        Forms\Components\TextInput::make('total_nights')
                            ->readOnly(),
                        Forms\Components\TextInput::make('number_of_rooms')
                            ->label('Number of Rooms')
                            ->required()
                            ->default(1)
                            ->reactive()
                            ->afterStateUpdated(function ($state, $set, $get) {
                                $totalNights = (int) $get('total_nights');
                                $hotel = \App\Models\Hotel::find($get('hotel_id'));
                                $pricePerNight = $hotel->price_per_night ?? 0;
                                $totalRooms = (int) $state;

                                if ($totalRooms && $totalNights && $pricePerNight) {
                                    $totalPrice = $totalRooms * $totalNights * $pricePerNight;
                                    $set('total_price', NumberFormatter::create('id_ID', NumberFormatter::DECIMAL)->format($totalPrice * 1000));
                                }
                            })
                            ->numeric(),
                        MoneyInput::make('price_per_night')
                            ->label('Price/Night')
                            ->required()
                            ->readOnly()
                            ->columnSpanFull()
                            ->currency('IDR')
                            ->locale('id_ID')
                            ->minValue(100)
                            ->formatStateUsing(function ($state) {
                                return NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)
                                    ->format((float) $state * 1000);
                            })
                            ->mutateDehydratedStateUsing(function ($state) {
                                return (float) $state / 100000;
                            }),
                        MoneyInput::make('total_price')
                            ->label('Total Price')
                            ->required()
                            ->readOnly()
                            ->columnSpanFull()
                            ->currency('IDR')
                            ->locale('id_ID')
                            ->minValue(100)
                            ->formatStateUsing(function ($state) {
                                return NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)
                                    ->format((float) $state * 1000);
                            })
                            ->mutateDehydratedStateUsing(function ($state) {
                                return (float) $state / 100000;
                            }),
                    ])
                    ->collapsible(),
                Section::make('Status')
                    ->schema([
                        Forms\Components\ToggleButtons::make('status')
                            ->label('Status')
                            ->options([
                                'pending' => 'Pending',
                                'confirmed' => 'Confirmed',
                                'cancelled' => 'Cancelled',
                            ])
                            ->colors([
                                'pending' => 'warning',
                                'confirmed' => 'success',
                                'cancelled' => 'danger',
                            ])
                            ->icons([
                                'pending' => 'heroicon-o-clock',
                                'confirmed' => 'heroicon-o-check-circle',
                                'cancelled' => 'heroicon-o-x-circle',
                            ])
                            ->inline()
                            ->required(),
                    ])
                    ->collapsible(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Booked by')
                    ->sortable(),
                Tables\Columns\TextColumn::make('hotel.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_in_date')
                    ->date('l, d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('check_out_date')
                    ->date('l, d F Y')
                    ->sortable(),
                Tables\Columns\TextColumn::make('number_of_rooms')
                    ->numeric()
                    ->alignCenter()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_price')
                    ->formatStateUsing(function ($state) {
                        return NumberFormatter::create('id_ID', NumberFormatter::CURRENCY)->format($state * 1000);
                    })
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->alignCenter()
                    ->sortable()
                    ->badge(true)
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'confirmed',
                        'danger' => 'cancelled',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            // 'view' => Pages\ViewBooking::route('/{record}'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}
