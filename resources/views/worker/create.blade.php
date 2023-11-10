@extends('layout.main')
@section('content')
    <form class="col-5" action="{{ route('worker.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="Surname">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="age" placeholder="Age">
        </div>
        <div class="mb-3">
            <textarea class="form-control" name="description"  rows="5" placeholder="Description"></textarea>
        </div>
        <div class="mb-3">
            <label for="is_married" class="form-label">Is married</label>
            <input type="checkbox" id="is_married" name="is_married">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
