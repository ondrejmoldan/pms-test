@extends('layouts.master')

@section('title', 'Create - Projects')

@section('content')

    <h2 class="font-weight-bold">Create a New Project</h2>

    <form method="POST" action="/projects">
        @csrf
        <div class="form-group">
            <label for="title">Project name:</label>
            <input type="text" name="title" class="form-control" placeholder="Project title" id="title" required>
        </div>
        <div class="form-group">
            <label for="desc">Description:</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Description of project" id="desc" required></textarea>
        </div>
        <div class="mb-2">
            <button type="submit" class="btn btn-primary">Create Project</button>
        </div>

        @include('/partials/errors')
    </form>
@endsection