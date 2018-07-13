@extends('layouts.app')

@section('content')

	<h1>Task Details : {{ strtoupper($task->name)}}</h1>

	<div class="jumbotron">
		<h3> Title : {{ $task->name }}</h3>
		<p>Description :{{ $task->description}}</p>
	</div>


@endsection
