@extends('app')

@section('content')
    <h1>Users</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->slug}}</td>
                    <td>{{$user->email}}</td>
                    <td><button class="btn btn-default"><a href="{{action('UsersController@show', [$user->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('UsersController@edit', [$user->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/auth/register">Add User</a></button></td>
        </table>

    </div>
@stop