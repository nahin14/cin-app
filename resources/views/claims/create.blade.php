@extends('app')

@section('content')

    {!! Form::open(['url' => 'claims']) !!}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Claim</div>
                    <div class="panel-body">

                        <div class="form-group">
                            {!! Form::label('slug', 'Claim Name:') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('claimTypeID', 'Claiming As:') !!}
                            {!! Form::select('claimTypeID', $claim_types, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('claimDate', 'Date of Accident:') !!}
                            {!! Form::input('date', 'claimDate', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('statusID', 'Claim Status:') !!}
                            {!! Form::select('statusID', $statuses, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('claimInfo', 'Claim Information:') !!}
                            {!! Form::textarea('claimInfo', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('notes', 'Additional Notes:') !!}
                            {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('clientID', 'Client Name:') !!}
                            {!! Form::select('clientID', $clients, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('clientTypeID', 'Client Type:') !!}
                            {!! Form::select('clientTypeID', $client_types, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('userID', 'Staff Responsible:') !!}
                            {!! Form::select('userID', $users, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('solicitorID', 'Solicitor Name:') !!}
                            {!! Form::select('solicitorID', $solicitors, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Claim', ['class' => 'btn btn-primary']) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop