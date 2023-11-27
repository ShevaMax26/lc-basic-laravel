@extends('layout.main')
@section('content')
    <form class="col-5" action="{{ route('workers.update', $worker->id) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') ?? $worker->name }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{ old('surname') ?? $worker->surname }}">
            @error('surname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') ?? $worker->email }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="age" placeholder="Age" value="{{ old('age') ?? $worker->age }}">
            @error('age')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description"  rows="5" placeholder="Description">{{ old('description') ?? $worker->description }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="is_married" class="form-label">Is married</label>
            <input type="checkbox" id="is_married" name="is_married"
                {{ old('is_married') ?? $worker->is_married ? 'checked' : '' }}
            >
            @error('is_married')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
