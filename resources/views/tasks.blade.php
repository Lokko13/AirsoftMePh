@extends('app')

@section('content')

<div class="panel-body">
 
    <form action="{{ url('task') }}" method="POST" class="form-horizontal">
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Task</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task-name" class="form-control">
            </div>

        </div>

        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3">
                <i class="fa fa-plus"></i>Add Task
            </div>
        </div>
    </form>
</div>

@endsection