<?php

namespace App\Console\Commands;

use App\Models\Department;
use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'develop';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some develops';

    /**
     * Execute the console command.
     */
    public function handle()
    {
//        $this->prepareData();

        $position = Position::find(1);

        dd($position->oldestWorker->toArray());
        return 0;
    }

    public function prepareData()
    {
        // Створення позицій
        $positionData1 = [
            'title' => 'Developer',
        ];
        $position1 = Position::create($positionData1);

        $positionData2 = [
            'title' => 'Designer',
        ];
        $position2 = Position::create($positionData2);

        // Створення працівників
        $workerData1 = [
            'name' => 'Oleg',
            'surname' => 'Voituk',
            'email' => 'oleg@gmail.com',
            'age' => '20',
            'description' => 'Friend Oleg',
            'position_id' => $position1->id,
        ];
        $worker1 = Worker::create($workerData1);

        $workerData2 = [
            'name' => 'Anna',
            'surname' => 'Smith',
            'email' => 'anna@gmail.com',
            'age' => '25',
            'description' => 'Designer Anna',
            'position_id' => $position2->id,
        ];
        $worker2 = Worker::create($workerData2);

        $workerData3 = [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'john@gmail.com',
            'age' => '30',
            'description' => 'Developer John',
            'position_id' => $position1->id,
        ];
        $worker3 = Worker::create($workerData3);

        // Створення профілів
        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Lutsk',
            'skill' => 'Architect',
            'experience' => 1,
            'finished_study_at' => '2021-06-26',
        ];
        $profile1 = Profile::create($profileData1);

        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'New York',
            'skill' => 'Creative Designer',
            'experience' => 3,
            'finished_study_at' => '2020-12-15',
        ];
        $profile2 = Profile::create($profileData2);

        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'San Francisco',
            'skill' => 'Full-Stack Developer',
            'experience' => 2,
            'finished_study_at' => '2022-03-10',
        ];
        $profile3 = Profile::create($profileData3);
    }
}
