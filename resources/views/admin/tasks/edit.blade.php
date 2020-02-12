@extends('admin.default')

@section('page-header')
	Task <small>{{ trans('app.update_item') }}</small>
@stop

@section('content')
	{!! Form::model($item, [
			'action' => ['TaskController@update', $item->id],
			'method' => 'put', 
			'files' => true
		])
	!!}

		@include('admin.tasks.form')

		<button type="submit" class="btn btn-primary">{{ trans('app.edit_button') }}</button>
		
	{!! Form::close() !!}
	
@stop
