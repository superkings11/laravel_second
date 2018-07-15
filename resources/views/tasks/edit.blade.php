@extends('layouts.app')

@section('content')


<form action="{{ url('tasks',[$task->id]) }}" method="POST">
	<h1>Edit TASK: {{ $task->name }}</h1>	
  <input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	  <div class="form-group">
        <label for="name">Task name</label>
        <input type="text" class="form-control" id="taskname"  name="name" value="{{$task->name}}">
      </div>
       <div class="form-group">
        <label for="description	">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="description" value="{{$task->description}}">
      </div>
	<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection