@extends('app')

@section('content')

    <h1>Clients</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>License Number</th>
                <th>Insurance Type</th>
                <th>Insurer</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->slug}}</td>
                    <td>{{$client->licenseNo}}</td>
                    <td>{{$client->insuranceType()}}</td>
                    <td>{{$client->insurer()}}</td>
                    <td><button class="btn btn-default"><a href="{{action('ClientsController@show', [$client->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('ClientsController@edit', [$client->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/client/create">Add Client</a></button></td>
        </table>
    </div>

@stop