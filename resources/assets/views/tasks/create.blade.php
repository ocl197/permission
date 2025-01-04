@extends('permission::layouts.app')

@section('content')
    <h1>Tasks</h1>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="description" placeholder="Description">
        <button type="submit">Create</button>
    </form>
@endsection