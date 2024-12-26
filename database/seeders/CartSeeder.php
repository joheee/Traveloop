<?php

namespace Database\Seeders;

use App\Models\Cart;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carts = [
            [
                'user_id' => 1,
                'hotel_id' => 1,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 1000,
            ],
            [
                'user_id' => 1,
                'hotel_id' => 2,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 2000,
            ],
            [
                'user_id' => 2,
                'hotel_id' => 3,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 3000,
            ],
            [
                'user_id' => 2,
                'hotel_id' => 4,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 4000,
            ],
            [
                'user_id' => 1,
                'hotel_id' => 5,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 5000,
            ],
            [
                'user_id' => 3,
                'hotel_id' => 6,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 6000,
            ],
            [
                'user_id' => 3,
                'hotel_id' => 7,
                'check_in_date' => now(),
                'check_out_date' => now()->addDays(3),
                'total_price' => 7000,
            ],
        ];

        foreach ($carts as $cart) {
            Cart::firstOrCreate($cart);
        }
    }
}
