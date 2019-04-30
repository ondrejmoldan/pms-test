@extends('layouts.master')

@section('title', 'Edit task - Projects')

@section('content')

<h2>Edit task</h2>

<form method="POST" action="/tasks/{{ $task->id }}">
    @method('PATCH')
    @csrf
    <div class="form-group">
        <label class="font-weight-bold" for="name">Task name:</label>
        <input type="text" name="name" class="form-control" placeholder="Project name" id="name" value="{{ $task->name }}" required>
    </div>
    <div class="form-group">
        <label class="font-weight-bold" for="desc">Description:</label>
        <textarea name="description" class="form-control" rows="5" placeholder="Description of task" id="desc" required>{{ $task->description }}</textarea>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </div>
</form>

<form method="POST" action="/tasks/{{ $task->id }}" style="margin-top: 1em;">
    @method('DELETE')
    @csrf
    <div>
        <button type="submit" class="btn btn-danger">Delete</button>
    </div>
</form>


@endsection
