<?php

namespace Database\Seeders;

use App\Models\Department;
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
        $department = Department::first();

        $positions = [
            ['title' => 'Developer', 'department_id' => $department->id],
            ['title' => 'Designer', 'department_id' => $department->id],
            ['title' => 'Project Manager', 'department_id' => $department->id],
        ];

        foreach ($positions as $position) {
            Position::firstOrCreate($position);
        }
    }
}
