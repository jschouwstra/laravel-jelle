@extends('app')

@section('content')
<h1>New article</h1>
<hr/>

{!! Form::open(['url' => 'articles']) !!}
	<!- Input field ->
	<div class="form-group">
		{!! Form::label('title', 'title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>

	<!- Textarea field ->
	<div class="form-group">
		{!! Form::label('body', 'body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>

	<!- Submit field ->
	<div class="form-group">
		{!! Form::submit('Add article', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	
				
{!! Form::close() !!}



@stop