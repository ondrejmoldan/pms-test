@extends('layouts.master')

@section('title', 'Show task - Projects')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shadow p-3 bg-white rounded text-center">
                <h1>{{ $task->name }}</h1>
            </div>

            <table class="table table-hover table-responsive font-size-150per">
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>Completed</th>
                    <th></th>
                </tr>
                <tr class="{{ $task->completed ? 'is-complete' : '' }}">
                    <td>{{ $task->id }}</td>
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
                                <input type="checkbox" name="completed" id="completed" onchange="this.form.submit()"
                                    {{ $task->completed ? 'checked' : '' }}>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>


    </div>
</div>

@endsection
