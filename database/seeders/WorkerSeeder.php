<?php

namespace Database\Seeders;

use App\Models\Position;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = Position::all();

        $workers = [
            [
                'name' => 'Oleg',
                'surname' => 'Voituk',
                'email' => 'oleg@gmail.com',
                'age' => 20,
                'description' => 'Friend Oleg',
                'position_id' => $positions->where('title', 'Developer')->first()->id,
            ],
            [
                'name' => 'Anna',
                'surname' => 'Smith',
                'email' => 'anna@gmail.com',
                'age' => 25,
                'description' => 'Designer Anna',
                'position_id' => $positions->where('title', 'Designer')->first()->id,
            ],
            [
                'name' => 'John',
                'surname' => 'Doe',
                'email' => 'john@gmail.com',
                'age' => 30,
                'description' => 'Developer John',
                'position_id' => $positions->where('title', 'Developer')->first()->id,
            ],
            [
                'name' => 'Elena',
                'surname' => 'Johnson',
                'email' => 'elena@gmail.com',
                'age' => 28,
                'description' => 'Project Manager Elena',
                'position_id' => $positions->where('title', 'Project Manager')->first()->id,
            ],
            [
                'name' => 'Alex',
                'surname' => 'Brown',
                'email' => 'alex@gmail.com',
                'age' => 32,
                'description' => 'Senior Developer Alex',
                'position_id' => $positions->where('title', 'Developer')->first()->id,
            ],
            [
                'name' => 'Sophia',
                'surname' => 'Miller',
                'email' => 'sophia@gmail.com',
                'age' => 26,
                'description' => 'Designer Sophia',
                'position_id' => $positions->where('title', 'Designer')->first()->id,
            ],
        ];

        foreach ($workers as $workerData) {
            $worker = Worker::firstOrCreate($workerData);

            $worker->avatar()->create([
                'path' => "avatar-worker-$worker->id"
            ]);
        }
    }
}
