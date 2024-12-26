<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $histories = [
            [
                'booking_id' => 1,
                'user_id' => 1,
                'action' => 'created',
                'description' => 'Booking created by user 1',
            ],
            [
                'booking_id' => 1,
                'user_id' => 1,
                'action' => 'updated',
                'description' => 'Booking updated by user 1',
            ],
            [
                'booking_id' => 2,
                'user_id' => 2,
                'action' => 'created',
                'description' => 'Booking created by user 2',
            ],
            [
                'booking_id' => 2,
                'user_id' => 2,
                'action' => 'updated',
                'description' => 'Booking updated by user 2',
            ],
        ];

        foreach ($histories as $history) {
            History::create($history);
        }
    }
}
