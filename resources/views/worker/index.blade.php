@extends('layout.main')
@section('content')
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
                <td><a href="{{ route('worker.show', $worker->id) }}">Detail</a></td>
                <td><a href="{{ route('worker.edit', $worker->id) }}">Edit</a></td>
                <td>
                    <form action="{{ route('worker.destroy', $worker->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
