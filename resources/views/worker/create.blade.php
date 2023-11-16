@extends('layout.main')
@section('content')
    <form class="col-5" action="{{ route('worker.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
            @error('name')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Surname" value="{{ old('surname') }}">
            @error('surname')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
            @error('email')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="age" placeholder="Age" value="{{ old('age') }}">
            @error('age')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description"  rows="5" placeholder="Description">{{ old('description') }}</textarea>
            @error('description')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
               <label for="is_married" class="form-label">Is married</label>
            <input {{ old('is_married') ? 'checked' : '' }} type="checkbox" id="is_married" name="is_married">
            @error('is_married')
            <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
