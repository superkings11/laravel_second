@extends('layouts.app')

@section('content')


<form action="/tasks" method="post">
	<h1>Add NEW TASK</h1>	
	{{ csrf_field() }}
	  <div class="form-group">
        <label for="name">Task name</label>
        <input type="text" class="form-control" id="taskname"  name="name">
      </div>
       <div class="form-group">
        <label for="description	">Task Description</label>
        <input type="text" class="form-control" id="taskDescription" name="description">
      </div>
	<button type="submit" class="btn btn-primary">Submit</button>

</form>


@endsection