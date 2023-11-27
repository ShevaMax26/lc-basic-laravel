@extends('layout.main')
@section('content')
    <form action="{{ route('workers.index') }}" class="d-flex gap-2 w-100">
        <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="name" value="{{ request()->get('name') }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="surname" placeholder="surname" value="{{ request()->get('surname') }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="email" placeholder="email" value="{{ request()->get('email') }}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="from" placeholder="from" value="{{ request()->get('from') }}">
        </div>
        <div class="mb-3">
            <input type="number" class="form-control" name="to" placeholder="to" value="{{ request()->get('to') }}">
        </div>
        <div class="mb-3">
            <input type="text" class="form-control" name="description" placeholder="description" value="{{ request()->get('description') }}">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="is_married">Is married</label>
            <input {{ request()->get('is_married') ? 'checked' : '' }} type="checkbox" class="form-check-input" id="is_married" name="is_married">
        </div>
        <button type="submit" class="btn btn-primary h-fit-content" style="height: fit-content">Find</button>
        <a href="{{ route('workers.index') }}" type="submit" class="btn btn-warning" style="height: fit-content">Clear</a>
    </form>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Email</th>
            <th scope="col">Age</th>
            <th scope="col">Description</th>
            <th scope="col">Is married</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($workers as $worker)
            <tr>
                <th scope="row">{{ $worker->id }}</th>
                <td>{{ $worker->name }}</td>
                <td>{{ $worker->surname }}</td>
                <td>{{ $worker->email }}</td>
                <td>{{ $worker->age }}</td>
                <td>{{ $worker->description }}</td>
                <td>{{ $worker->is_married ? 'Yes' : 'No' }}</td>
                <td><a href="{{ route('workers.show', $worker->id) }}">Detail</a></td>
                @can('update', $worker)
                    <td><a href="{{ route('workers.edit', $worker->id) }}">Edit</a></td>
                @endcan
                @can('update', $worker)
                    <td>
                        <form action="{{ route('workers.destroy', $worker->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                @endcan
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>{{ $workers->withQueryString()->links() }}</div>
@endsection
