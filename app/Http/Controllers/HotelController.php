<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{
    public function landing(){
        $allHotel = DB::table('hotels')->get();
        $recomendedHotels = Hotel::withCount(['bookings' => function ($query) {
            $query->where('status', 'confirmed');
        }])
        ->orderBy('bookings_count', 'desc')
        ->take(6) 
        ->get();

        return view('hotel.landing', [
            'hotels' => $allHotel,
            'recomended' => $recomendedHotels
        ]);
    }

    public function detailHotel()
    {
        return view('components.detail');
    }
}
