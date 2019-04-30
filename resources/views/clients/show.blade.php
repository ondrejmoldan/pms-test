@extends('layouts.master')

@section('title', 'Show client - Clients')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shadow p-3 bg-white rounded text-center">
                <h1>{{ $client->firstname . " " . $client->lastname }}</h1>
            </div>

            <table class="table table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->firstname . " " . $client->lastname }}</td>
                    <td>{{ $client->email }}</td>
                </tr>
            </table>

@endsection
