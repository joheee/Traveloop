<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function landing(){
        return view('hotel.landing');
    }

    public function detailHotel()
    {
        return view('components.detail');
    }
}
