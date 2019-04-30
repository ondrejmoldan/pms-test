@extends('layouts.master')

@section('title', 'Edit - Projects')

@section('content')

    <h2>Edit a project</h2>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label class="font-weight-bold" for="title">Project name:</label>
            <input type="text" name="title" class="form-control" placeholder="Project title" id="title" value="{{ $project->title}}" required>
        </div>
        <div class="form-group">
            <label class="font-weight-bold" for="desc">Description:</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Description of project" id="desc" required>{{ $project->description }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </div>
    </form>

    <form method="POST" action="/projects/{{ $project->id }}" style="margin-top: 1em;">
        @method('DELETE')
        @csrf
        <div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>

@endsection