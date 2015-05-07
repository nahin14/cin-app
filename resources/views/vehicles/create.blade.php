@extends('app')

@section('content')

    {!! Form::open(['url' => 'vehicles']) !!}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Vehicle</div>
                    <div class="panel-body">

                        <div class="form-group">
                            {!! Form::label('Registration Number:') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('clientID', 'Client:') !!}
                            {!! Form::select('clientID', $clients, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('vehicleTypeID', 'Vehicle Type:') !!}
                            {!! Form::select('vehicleTypeID', $vehicle_types, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Vehicle', ['class' => 'btn btn-primary']) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop