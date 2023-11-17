<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            ['title' => 'Developer'],
            ['title' => 'Designer'],
            ['title' => 'Project Manager'],
        ];

        foreach ($positions as $position) {
            Position::firstOrCreate($position);
        }
    }
}
