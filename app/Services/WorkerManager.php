<?php

namespace App\Services;

use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;

class WorkerManager
{
    public function store(array $data): Worker
    {
        return Worker::create($data);
    }

    public function update(array $data, Worker $worker): Worker
    {
        $worker->update($data);
        $worker->fresh();
        return $worker;
    }
}
