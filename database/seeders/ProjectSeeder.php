<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            ['title' => 'Project A'],
            ['title' => 'Project B'],
            ['title' => 'Project C'],
        ];

        foreach ($projects as $project) {
            $createdProject = Project::create($project);

            $workers = Worker::inRandomOrder()->take(3)->get();

            foreach ($workers as $worker) {
                if (!$createdProject->workers->contains($worker)) {
                    $createdProject->workers()->attach($worker);
                }
            }
        }
    }
}
