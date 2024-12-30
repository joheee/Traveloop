<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function bookingHotel(Hotel $hotel)
    {
        return view('hotel.booking', [
            'hotel' => $hotel
        ]);
    }
    public function create(Request $request, Hotel $hotel){
        // Validasi input
        $validatedData = $request->validate([
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'number_of_guests' => 'required|integer|min:1',
        ]);

        // Hitung total harga (contoh: harga per malam dikali jumlah malam)
        $numberOfNights = (new \DateTime($validatedData['check_out_date']))->diff(new \DateTime($validatedData['check_in_date']))->days;
        $pricePerNight = $hotel->price_per_night; // Asumsikan tabel hotels punya kolom price_per_night
        $totalPrice = $numberOfNights * $pricePerNight;

        // Buat data booking
        $booking = Booking::create([
            'user_id' => Auth::id(),
            'hotel_id' => $hotel->id,
            'check_in_date' => $validatedData['check_in_date'],
            'check_out_date' => $validatedData['check_out_date'],
            'number_of_guests' => $validatedData['number_of_guests'],
            'total_price' => $totalPrice,
            'status' => 'pending',
        ]);

        return response()->json([
            'message' => 'Booking created successfully.',
            'booking' => $booking
        ], 201);
    }
}
