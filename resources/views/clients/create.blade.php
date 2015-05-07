@extends('app')

@section('content')

    {!! Form::open(['url' => 'clients']) !!}

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Client</div>
                    <div class="panel-body">

                        <div class="form-group">
                            {!! Form::label('Client Name:') !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('DOB:') !!}
                            {!! Form::input('date', 'dob', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('License Number:') !!}
                            {!! Form::text('licenseNo', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('addressLine1', 'Address Line 1:') !!}
                            {!! Form::text('addressLine1', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('addressLine2', 'Address Line 2:') !!}
                            {!! Form::text('addressLine2', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('city', 'City:') !!}
                            {!! Form::text('city', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('postcode', 'Postcode:') !!}
                            {!! Form::text('postcode', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('telephone', 'Telephone:') !!}
                            {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('mobile', 'Mobile:') !!}
                            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('email', 'Email:') !!}
                            {!! Form::text('email', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('insuranceTypeID', 'Insurance Type:') !!}
                            {!! Form::select('insuranceTypeID', $insurance_types, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('insurerID', 'Insurer:') !!}
                            {!! Form::select('insurerID', $insurers, null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Client', ['class' => 'btn btn-primary']) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}
@stop