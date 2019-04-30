@extends('layouts.master')

@section('title', 'Clients')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="shadow p-3 mb-3 bg-white rounded text-center">
                <h1>Clients</h1>
            </div>
            <table class="table table-hover table-responsive">
                <tr>
                    <th>ID</th>
                    <th>Client name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Bank account</th>
                    <th>DNI</th>
                    <th>VAT</th>
                </tr>
                @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td><a href="/clients/{{ $client->id }}"> {{ $client->firstname . " " . $client->lastname }}</a></td>
                    <td>{{ $client->company }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->bank_account }}</td>
                    <td>{{ $client->dni }}</td>
                    <td>{{ $client->vat }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


@endsection
