@extends('layouts.master')

@section('title', 'Projects')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shadow p-3 bg-white rounded text-center">
                <h1>Projects</h1>
            </div>
            <table class="table table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Project name</th>
                    <th>Description</th>
                    <th></th>
                </tr>
                @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>
                        <a href="/projects/{{ $project->id }}">
                            {{ $project->title }}
                        </a>
                    </td>
                    <td>{{ $project->description }}</td>
                    <td><a href="/projects/{{ $project->id }}/edit">Edit</a></td>

                </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td><a href="/projects/create">Create a new project</a></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>


@endsection
