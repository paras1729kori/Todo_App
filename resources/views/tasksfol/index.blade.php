@extends('layouts.app')

@section('title', 'Tasks Home')

@section('content')

	<div class="row justify-content-center mb-3">
		<div class="col-sm-10"><h1>Home</h1></div>
		<div class="col-sm-2">
			<a href="{{ route('task.create') }}" class="btn btn-block btn-success">Create Task</a>
		</div>
	</div>

	@if ($tasks->count() == 0)
		<p class="lead text-center">There are no tasks listed Why don't you create some !!!</p>
	@else
		@foreach($tasks as $task)

		<div class="row">
			<div class="col-sm-12">
				<h3>
					{{ $task->name }}
					<small>{{ $task->created_at }}</small>
				</h3>
				<p>{{ $task->description }}</p>
				<h4>Due Date: <small>{{ $task->due_date }}</small></h4>
				{!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
					<a href="{{ route('task.edit', $task->id) }}" class="btn btn-sm btn-primary">Edit</a>
					<button class="btn btn-sm btn-danger" type="submit">Delete</button>
				{!! Form::close() !!}
			</div>
		</div>
		<hr>

	@endforeach
	@endif
	

    {{-- For paginating 
	<div class="row justify-content-center">
		<div class="col-sm-6 text-center">
			{{ $tasks->links() }}
		</div>
	</div> --}}

@endsection