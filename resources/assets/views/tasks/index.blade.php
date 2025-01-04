@extends('permission::layouts.app')

@section('content')
    <h1>Tasks</h1>
    <ul>
        @foreach ($tasks as $task)
            <li>{{ $task->name }}</li>
            <li>{{ $task->description }}</li>
            <li>
                <a href="{{ route('permission.tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('permission.tasks.destroy', $task) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
    <form action="{{ route('permission.tasks.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Create</button>
    </form>
@endsection