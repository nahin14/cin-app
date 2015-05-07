@extends ('app')

@section('content')

    <h1>Solicitors</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Solicitor Name</th>
                <th>Firm Name</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($solicitors as $solicitor)
                <tr>
                    <td>{{$solicitor->id}}</td>
                    <td>{{$solicitor->slug}}</td>
                    <td>{{$solicitor->firmName}}</td>
                    <td><button class="btn btn-default"><a href="{{action('SolicitorsController@show', [$solicitor->slug])}}">view</a></button></td>
                    <td><button class="btn btn-default"><a href="{{action('SolicitorsController@edit', [$solicitor->slug])}}">edit</a></button></td>
                </tr>
            @endforeach
            </tbody>
            <td><button class="btn btn-default"><a href="/solicitors/create">Add Solicitor</a></button></td>
        </table>
    </div>

@stop