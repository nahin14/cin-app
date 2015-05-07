@extends('app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Task: {{$task->slug}}</div>
                    <div class="panel-body">

                        <div class="form-group">
                            Claim Belonging To: {{$task->claim()}}
                        </div>

                        <div class="form-group">
                            Task Information: {{$task->taskInfo}}
                        </div>

                        <div class="form-group">
                            Task Status: {{$task->status()}}
                        </div>

                        <div class="form-group">
                            Task Set Date: {{$task->taskSetDate}}
                        </div>

                        <div class="form-group">
                            Task To Be Completed By: {{$task->taskDeadlineDate}}
                        </div>

                        <div class="form-group">
                            Notes: {{$task->notes}}
                        </div>

                        <div class="form-group">
                            Staff Responsible: {{$task->user()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop