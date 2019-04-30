@extends('layouts.master')

@section('title', 'Show client - Clients')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shadow p-3 bg-white rounded text-center">
                <h1>New client</h1>
            </div>

            <div class="container-fluid shadow p-4 bg-white rounded">
                <div class="row">
                    <div class="col-lg-7">
                        {!! form($form) !!}
                    </div>
                    

                    @include('/partials/errors')

                </div>
            </div>
            @endsection
