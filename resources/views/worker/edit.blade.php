@extends('layout.main')
@section('content')
    <form class="col-5" action="{{ route('worker.update', $worker->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ $worker->name }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{ $worker->surname }}">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ $worker->email }}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="age" placeholder="Age" value="{{ $worker->age }}">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description"  rows="5" placeholder="Description">
                {{ $worker->description }}
            </textarea>
        </div>
        <div class="mb-3">
            <label for="is_married" class="form-label">Is married</label>
            <input type="checkbox" id="is_married" name="is_married"
                {{ $worker->is_married ? 'checked' : '' }}
            >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
