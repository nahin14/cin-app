@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Insurer: {{$insurer->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Address Line 1: {{$insurer->addressLine1}}
                        </div>

                        <div class="form-group">
                            Address Line 2: {{$insurer->addressLine2}}
                        </div>

                        <div class="form-group">
                            City: {{$insurer->city}}
                        </div>

                        <div class="form-group">
                            Postcode: {{$insurer->postcode}}
                        </div>

                        <div class="form-group">
                            Telephone: {{$insurer->telephone}}
                        </div>

                        <div class="form-group">
                            E-mail: {{$insurer->email}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop