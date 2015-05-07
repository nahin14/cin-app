@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Claim Name: {{$claim->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Claiming As: {{$claim->claimType()}}
                        </div>

                        <div class="form-group">
                            Accident Date: {{$claim->claimDate}}
                        </div>

                        <div class="form-group">
                            Claim Status: {{$claim->status()}}
                        </div>

                        <div class="form-group">
                            Claim Information: {{$claim->claimInfo}}
                        </div>

                        <div class="form-group">
                            Additional Notes: {{$claim->notes}}
                        </div>

                        <div class="form-group">
                            Client Name: {{$claim->client()}}
                        </div>

                        <div class="form-group">
                            Client Type: {{$claim->clientType()}}
                        </div>

                        <div class="form-group">
                            Staff Responsible: {{$claim->user()}}
                        </div>

                        <div class="form-group">
                            Solicitor Assigned: {{$claim->solicitor()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop