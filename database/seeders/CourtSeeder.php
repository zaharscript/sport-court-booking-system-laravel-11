<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourtSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $courts = [
            [
                'name' => 'Court 1',
                'type' => 'badminton',
                'price_per_hour' => 15.00,
            ],
            [
                'name' => 'Court 2',
                'type' => 'badminton',
                'price_per_hour' => 15.00,
            ],
            [
                'name' => 'Court 3',
                'type' => 'futsal',
                'price_per_hour' => 20.00,
            ],
            [
                'name' => 'Court 4',
                'type' => 'futsal',
                'price_per_hour' => 20.00,
            ],
        ];
    }
}
