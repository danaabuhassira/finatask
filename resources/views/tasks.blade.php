
@extends('layout.app')
@section('content')

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                New Task
            </div>

            <div class="panel-body">
                <!-- Display Validation Errors -->
                <!-- Display Validation Errors -->
                {{-- @if ($errors->any())
                <div class ="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li> {{ $error }} </li>
                        @endforeach
                    </ul>
                </div> --}}
                <!-- New Task Form -->
                <form action="{{url('store')}}" method="POST" class="form-horizontal">
                    @csrf
                    <!-- Task Name -->
                    <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Task</label>

                        <div class="col-sm-6">
                            <input type="text" name="name" id="task-name" class="form-control" value="">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-btn fa-plus"></i>Add Task
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Current Tasks -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Tasks
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">
                        <thead>
                            <th>Task</th>
                            <th>&nbsp;</th>
                        </thead>
                        <tbody>

                            @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text"><div>{{$task->name}}</div></td>

                                <!-- Task Delete Button -->
                                <td>
                                    <form action="{{url('delete/'.$task->id)}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-btn fa-trash"></i>Delete
                                        </button>
                                    </form>
                                </td>

                                <!-- Task Update Button -->
                                <td>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" id="" class="form-control" value="{{$task->name}}">
                                    </div>
                                    <form action="{{url('update/'.$task->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{$task->id}}">
                                        <button type="submit" class="btn btn-sm btn-primary"> Edit

                                          <i class="fa fa-btn fa-info"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
    </div>
</div>

@endsection
