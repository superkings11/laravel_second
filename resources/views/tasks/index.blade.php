@extends('layouts.app')
<div class="contaier">
	@section('content')
	<table class=" table table-dark col-md-12 col-sm-12">
		<thead scope="col">
			<th> ID </th>
			<th >Name</th>
			<th>Descritpoin</th>	
			<th>Created Time</th>
			<th>Updated Time</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		
	@foreach($tasks as $task) 	

	 	<tbody>
	 		<tr scope="row">
	 			<td>{{$task->id}}</td>
	 			<td><a href="/task/{{$task->id}}">{{$task->name}}</a></td>
	 			<td>{{$task->description}} </td>
	 			<td>{{$task->created_at}}</td>
	 			<td>{{$task->updated_at}}</td>
	 			<td>
	 				<div class="btn-group">
	 					<a href="{{URL::to('tasks/'.$task->id)}}"><button class="btn btn-primary">Edit</button></a>
	 				</div>
	 			</td>
	 			<td>
	 			<form action="">
	 				<input type="hidden" name="_method" value="Delete">
	 				<input type="hidden" name="_method" value="{{ csrf_token() }}">
	 				<input type="submit" class="btn btn-danger" value="Delete">
	 			</form>
	 			</td>
	 		</tr>
	 	</tbody>
	@endforeach 		

	</table>
@endsection
</div>
