@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Solicitor: {{$solicitor->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Firm Name: {{$solicitor->firmName}}
                        </div>

                        <div class="form-group">
                            Address Line 1: {{$solicitor->addressLine1}}

                        </div>

                        <div class="form-group">
                            Address Line 2: {{$solicitor->addressLine2}}
                        </div>

                        <div class="form-group">
                            City: {{$solicitor->city}}
                        </div>

                        <div class="form-group">
                            Postcode: {{$solicitor->postcode}}
                        </div>

                        <div class="form-group">
                            Telephone: {{$solicitor->telephone}}
                        </div>

                        <div class="form-group">
                            Mobile: {{$solicitor->mobile}}
                        </div>

                        <div class="form-group">
                            E-mail: {{$solicitor->email}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop