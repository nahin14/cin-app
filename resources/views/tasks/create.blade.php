@extends('app')

@section('content')

    {!! Form::open(['url' => 'tasks']) !!}

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Add Task</div>
                        <div class="panel-body">
                            <div class="form-group">
                                {!! Form::label('slug', 'Task Name:') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('claimID', 'Claim Name:') !!}
                                {!! Form::select('claimID', $claims, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('taskInfo', 'Task Details:') !!}
                                {!! Form::textarea('taskInfo', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('statusID', 'Task Status:') !!}
                                {!! Form::select('statusID', $statuses, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('taskSetDate', 'Task Set Date:') !!}
                                {!! Form::input('date', 'taskSetDate', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('taskDeadlineDate', 'Task To Be Completed By:') !!}
                                {!! Form::input('date', 'taskDeadlineDate', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('notes', 'Notes:') !!}
                                {!! Form::textarea('notes', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('userID', 'User In Charge:') !!}
                                {!! Form::select('userID', $users, null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit('Add Task', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {!! Form::close() !!}
@stop