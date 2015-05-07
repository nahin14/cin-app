@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vehicle Registration Number: {{$vehicle->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Vehicle Type: {{$vehicle->vehicleType()}}
                        </div>

                        <div class="form-group">
                            Client: {{$vehicle->client()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop