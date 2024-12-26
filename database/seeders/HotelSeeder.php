<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hotels = [
            [
                'name' => 'Hotel California',
                'address' => 'California, USA',
                'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt asperiores quibusdam, ipsum dolorum officia doloremque in? Dolore et rerum non.',
                'price_per_night' => 100,
            ],
            [
                'name' => 'Hotel Ohio',
                'address' => 'Ohio, USA',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum quis atque quod maiores nihil cupiditate. Et quo aperiam cum eum.',
                'price_per_night' => 200,
            ],
            [
                'name' => 'Hotel Indonesia',
                'address' => 'Jakarta, Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum.',
                'price_per_night' => 300,
            ],
            [
                'name' => 'Hotel Bali',
                'address' => 'Bali, Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'price_per_night' => 400,
            ],
            [
                'name' => 'Hotel Surabaya',
                'address' => 'Surabaya, Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'price_per_night' => 500,
            ],
            [
                'name' => 'Hotel Bandung',
                'address' => 'Bandung, Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
                'price_per_night' => 600,
            ],
            [
                'name' => 'Hotel Yogyakarta',
                'address' => 'Yogyakarta, Indonesia',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'price_per_night' => 700,
            ],
        ];

        foreach ($hotels as $hotel) {
            Hotel::firstOrCreate($hotel);
        }
    }
}
