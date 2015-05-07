@extends('app')

@section('content')
    @if (Auth::guest())
        <head><meta http-equiv="refresh" content="0; url=/" /></head>
    @else
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif



                                {!! Form::open(['url' => 'auth/register']) !!}


                                                    <div class="form-group">
                                                        {!! Form::label('Name') !!}
                                                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('Username') !!}
                                                        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('E-Mail') !!}
                                                        {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('Password') !!}
                                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('Password Confirmation') !!}
                                                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::label('roleID', 'User Role:') !!}
                                                        {!! Form::select('roleID', $role, null, ['class' => 'form-control']) !!}
                                                    </div>

                                                    <div class="form-group">
                                                        {!! Form::submit('Add User', ['class' => 'btn btn-primary']) !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
