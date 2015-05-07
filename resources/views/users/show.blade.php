@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Staff Name: {{$user->name}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Username: {{$user->slug}}
                        </div>

                        <div class="form-group">
                            E-mail: {{$user->email}}
                        </div>

                        <div class="form-group">
                            Role: {{$user->roles()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop