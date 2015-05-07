@extends('app')

@section('content')

    {!! Form::model($user, ['url' => 'users/' . $user->slug, 'method' => 'PATCH']) !!}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit User</div>
                        <div class="panel-body">
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
                                {!! Form::label('roleID', 'User Role:') !!}
                                {!! Form::select('roleID', $role, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Update User', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@stop