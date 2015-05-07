@extends('app')

@section('content')

    <h1>Claims</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Claim</th>
                <th>Claim Status</th>
                <th>Date of Accident</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($claims as $claim)
                <tr>
                    <td>{{$claim->id}}</td>
                    <td>{{$claim->slug}}</td>
                    <td>{{$claim->status()}}</td>
                    <td>{{$claim->claimDate}}</td>
                    <td><button class="btn btn-default"><a href="{{action('ClaimsController@show', [$claim->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('ClaimsController@edit', [$claim->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/claims/create">Add Claim</a></button></td>
        </table>
    </div>

@stop