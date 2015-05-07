@extends ('app')

@section('content')

    <h1>Insurers</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Insurer Name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($insurers as $insurer)
                <tr>
                    <td>{{$insurer->id}}</td>
                    <td>{{$insurer->slug}}</td>
                    <td><button class="btn btn-default"><a href="/insurers/{{ $insurer->slug }}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('InsurersController@edit', [$insurer->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/insurers/create">Add Insurer</a></button></td>
        </table>
    </div>

@stop