<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['title' => 'IT'],
            ['title' => 'Analytics'],
        ];

        foreach ($departments as $department) {
            Department::firstOrCreate($department);
        }
    }
}
