@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Client: {{$client->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                             DOB: {{$client->dob}}
                        </div>

                        <div class="form-group">
                            License Number: {{$client->licenseNo}}
                        </div>

                        <div class="form-group">
                            Address Line 1: {{$client->addressLine1}}
                        </div>

                        <div class="form-group">
                            Address Line 2: {{$client->addressLine2}}
                        </div>

                        <div class="form-group">
                            City: {{$client->city}}
                        </div>

                        <div class="form-group">
                            Postcode: {{$client->postcode}}
                        </div>

                        <div class="form-group">
                            Telephone: {{$client->telephone}}
                        </div>

                        <div class="form-group">
                            Mobile: {{$client->mobile}}
                        </div>

                        <div class="form-group">
                            E-mail: {{$client->email}}
                        </div>

                        <div class="form-group">
                            Vehicle Type: {{$client->insuranceType()}}
                        </div>

                        <div class="form-group">
                            Client: {{$client->insurer()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
@stop