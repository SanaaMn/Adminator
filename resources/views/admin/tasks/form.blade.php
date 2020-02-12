<div class="row mB-40">
	<div class="col-sm-8">
		<div class="bgc-white p-20 bd">
		{!! Form::mySelect('project_id', 'Select Project', App\Project::pluck('name','id')) !!}
			{!! Form::myInput('text', 'name', 'Task name') !!}
			{!! Form::mySelect('user_id', 'Assing to', App\User::pluck('name','id')) !!}
			{!! Form::mySelect('status', 'Status', config('variables.boolean'), ['class' => 'form-control']) !!}
			{!! Form::myInput('text', 'deadline', 'Deadline' ,['class' => 'form-control date']) !!}
		</div>  
	</div>

</div>