@extends('permission::layouts.app')

@section('content')
    <h1>Tasks</h1>
    <form action="{{ route('permission.tasks.update', $task) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $task->name }}">
        <input type="text" name="description" value="{{ $task->description }}">
        <button type="submit">Update</button>
    </form>
@endsection