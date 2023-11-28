<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Worker\StoreRequest;
use App\Http\Requests\Worker\UpdateRequest;
use App\Http\Resources\WorkerResource;
use App\Models\Worker;
use App\Services\WorkerManager;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::all();

        return WorkerResource::collection($workers)->resolve();
    }

    public function show(Worker $worker)
    {
        return WorkerResource::make($worker)->resolve();
    }

    public function store(StoreRequest $request)
    {
        return WorkerResource::make(app(WorkerManager::class)->store($request->validated()))->resolve();
    }

    public function update(UpdateRequest $request, Worker $worker)
    {
        $worker = app(WorkerManager::class)->update($request->validated(), $worker);

        return WorkerResource::make($worker)->resolve();
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        return response()->json([
            'message' => 'worker was deleted'
        ]);
    }
}
