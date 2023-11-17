<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $worker1 = Worker::where('email', 'oleg@gmail.com')->first();
        $worker2 = Worker::where('email', 'anna@gmail.com')->first();
        $worker3 = Worker::where('email', 'john@gmail.com')->first();
        $worker4 = Worker::where('email', 'elena@gmail.com')->first();
        $worker5 = Worker::where('email', 'alex@gmail.com')->first();
        $worker6 = Worker::where('email', 'sophia@gmail.com')->first();

        $profiles = [
            [
                'worker_id' => $worker1->id,
                'city' => 'Lutsk',
                'skill' => 'Architect',
                'experience' => 1,
                'finished_study_at' => '2021-06-26',
            ],
            [
                'worker_id' => $worker2->id,
                'city' => 'New York',
                'skill' => 'Creative Designer',
                'experience' => 3,
                'finished_study_at' => '2020-12-15',
            ],
            [
                'worker_id' => $worker3->id,
                'city' => 'San Francisco',
                'skill' => 'Full-Stack Developer',
                'experience' => 2,
                'finished_study_at' => '2022-03-10',
            ],
            [
                'worker_id' => $worker4->id,
                'city' => 'London',
                'skill' => 'Project Management',
                'experience' => 4,
                'finished_study_at' => '2019-09-05',
            ],
            [
                'worker_id' => $worker5->id,
                'city' => 'Berlin',
                'skill' => 'Senior Developer',
                'experience' => 5,
                'finished_study_at' => '2018-11-20',
            ],
            [
                'worker_id' => $worker6->id,
                'city' => 'Paris',
                'skill' => 'Graphic Designer',
                'experience' => 2,
                'finished_study_at' => '2023-01-15',
            ],
        ];

        foreach ($profiles as $profile) {
            Profile::firstOrCreate($profile);
        }
    }
}
