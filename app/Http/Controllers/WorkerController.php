<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();
        dd($workers);
    }

    public function create()
    {
        $worker = [
            'name' => 'Maxym',
            'surname' => 'Shevchuk',
            'email' => 'max@gmail.com',
            'age' => '20',
            'description' => 'Bad boy)',
        ];
        Worker::create($worker);

        return 111;
    }
}
