@extends('admin.default')

@section('page-header')
	Task <small>{{ trans('app.add_new_item') }}</small>
@stop

@section('content')
	{!! Form::open([
			'action' => ['TaskController@store'],
			'files' => true
		])
	!!}

		@include('admin.tasks.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.add_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
