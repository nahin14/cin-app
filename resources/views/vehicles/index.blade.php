@extends('app')

@section('content')

    <h1>Vehicles</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Registration Number</th>
                <th>Vehicle Type</th>
                <th>Client Name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($vehicles as $vehicle)
                <tr>
                    <td>{{$vehicle->id}}</td>
                    <td>{{$vehicle->slug}}</td>
                    <td>{{$vehicle->vehicleType()}}</td>
                    <td>{{$vehicle->client()}}</td>
                    <td><button class="btn btn-default"><a href="{{action('VehiclesController@show', [$vehicle->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('VehiclesController@edit', [$vehicle->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/vehicles/create">Add Vehicle</a></button></td>
        </table>
    </div>

@stop