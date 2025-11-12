<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('openings')->insert([
            [
                'name' => 'Ruy Lopez',
                'eco_code' => 'C60',
                'pgn' => '1. e4 e5 2. Nf3 Nc6 3. Bb5',
                'description' => 'A classical opening focusing on rapid development and control of the center.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sicilian Defense',
                'eco_code' => 'B20',
                'pgn' => '1. e4 c5',
                'description' => 'One of the most popular defenses against 1.e4, often leading to sharp and dynamic play.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'French Defense',
                'eco_code' => 'C00',
                'pgn' => '1. e4 e6',
                'description' => 'A solid and resilient defense aiming to counterattack in the center with ...d5.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caro-Kann Defense',
                'eco_code' => 'B10',
                'pgn' => '1. e4 c6',
                'description' => 'A reliable defense for Black, emphasizing a strong pawn structure and counterplay opportunities.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Queen\'s Gambit',
                'eco_code' => 'D06',
                'pgn' => '1. d4 d5 2. c4',
                'description' => 'A classic opening where White offers a pawn to gain central control and long-term pressure.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
