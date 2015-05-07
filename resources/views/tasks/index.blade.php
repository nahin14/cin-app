@extends('app')

@section('content')

    <h1>Tasks</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Task Name</th>
                <th>Claim Name</th>
                <th>Task Status</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->slug}}</td>
                    <td>{{$task->claim()}}</td>
                    <td>{{$task->status()}}</td>
                    <td><button class="btn btn-default"><a href="{{action('TasksController@show', [$task->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('TasksController@edit', [$task->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/tasks/create">Add Task</a></button></td>
        </table>
    </div>

@stop