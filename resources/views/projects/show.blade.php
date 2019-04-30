@extends('layouts.master')

@section('title', 'Show - Projects')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
            <div class="shadow p-3 bg-white rounded text-center">
                <h1>{{ $project->title }}</h1>
            </div>


            @if ($project->tasks->count())
            <table class="table table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th></th>
                </tr>
                @foreach ($project->tasks as $task)
                <tr class="{{ $task->completed ? 'is-complete' : '' }}">
                    <td>{{ $task->id }}</td>
                    <td><a href="/tasks/{{ $task->id }}"><span >{{ $task->name }}</span></a></td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if ($task->completed)YES
                        @elseif (!$task->completed) NO
                        @endif
                    </td>
                    <td>
                        <form method="POST" action="/completed-tasks/{{ $task->id }}">
                            @if ($task->completed)
                                @method('DELETE')
                            @endif
                            @csrf
                            <div>
                                <input type="checkbox" name="completed" id="completed"
                                    onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            </div>
                        </form>
                    </td>
                    <td>
                        <a href="/tasks/{{ $task->id }}/edit">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
            @endif

            <div class="container-fluid shadow p-4 bg-white rounded">
                <div class="row">
                    <div class="col-lg-7">
                        <form method="POST" action="/projects/{{ $project->id }}/tasks">
                            @csrf
                            <div class="form-group">
                                <label for="task">Task name:</label>
                                <input type="text" name="name" class="form-control" placeholder="Task name" id="task"
                                    required>
                            </div>
                            <div class="mb-2">
                                <button type="submit" class="btn btn-primary">Create Task</button>
                            </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                            <label for="desc">Description:</label>
                            <textarea name="description" class="form-control" rows="3" placeholder="Description of task"
                                id="desc" required>
                            </textarea>
                        </div>
                    </div>
                    </form>

                    @include('/partials/errors')

                </div>
            </div>
        </div>

        <div class="col-lg-4 shadow p-3 bg-white rounded ">
            <div class="">{{ $project->description }}</div>
            <a href="/projects/{{ $project->id }}/edit">Edit</a>
        </div>



    </div>
</div>

@endsection
