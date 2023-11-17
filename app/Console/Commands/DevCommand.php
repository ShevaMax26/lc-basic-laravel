<?php

namespace App\Console\Commands;

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

        $worker = Worker::find(1);
        $profile = Profile::find(1);

        dd($profile->worker->toArray());
        return 0;
    }

    public function prepareData()
    {
        $workerData = [
            'name' => 'Oleg',
            'surname' => 'Voituk',
            'email' => 'oleg@gmail.com',
            'age' => '20',
            'description' => 'Friend Oleg',
        ];

        $worker = Worker::create($workerData);

        $profileData = [
            'worker_id' => $worker->id,
            'city' => 'Lutsk',
            'skill' => 'Architect',
            'experience' => 1,
            'finished_study_at' => '2021-06-26',
        ];

        $profile = Profile::create($profileData);
    }
}
