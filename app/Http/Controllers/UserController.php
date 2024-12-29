<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        // Mendapatkan user yang sedang login
        $user = auth()->user();
    
        // Mengambil history booking berdasarkan user yang login
        $histories = \App\Models\History::with(['booking.hotel'])
            ->where('user_id', $user->id)
            ->get();

        dd($histories);
    
        // Mengembalikan data ke view atau API
        return response()->json([
            'success' => true,
            'data' => $histories,
        ]);
    }
    
}
