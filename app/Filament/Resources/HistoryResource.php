<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoryResource\Pages;
use App\Filament\Resources\HistoryResource\RelationManagers;
use App\Models\History;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoryResource extends Resource
{
    protected static ?string $model = History::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('booking_id')
                    ->relationship('booking.hotel', 'name')
                    ->required(),
                Forms\Components\Select::make('user_id')
                    ->label('Booked by')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\ToggleButtons::make('action')
                    ->options([
                        'created' => 'Created',
                        'updated' => 'Updated',
                        'cancelled' => 'Cancelled',
                    ])
                    ->colors([
                        'created' => 'success',
                        'updated' => 'info',
                        'cancelled' => 'danger',
                    ])
                    ->icons([
                        'created' => 'heroicon-o-check-circle',
                        'updated' => 'heroicon-o-pencil',
                        'cancelled' => 'heroicon-o-x-circle',
                    ])
                    ->inline()
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->rows(5)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('booking.hotel.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('user.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('action')
                    ->alignCenter()
                    ->sortable()
                    ->badge(true)
                    ->colors([
                        'success' => 'created',
                        'info' => 'updated',
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
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistory::route('/create'),
            'view' => Pages\ViewHistory::route('/{record}'),
            'edit' => Pages\EditHistory::route('/{record}/edit'),
        ];
    }
}
