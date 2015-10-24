@extends('app')

@section('content')
<h1>New article</h1>
<hr/>

{!! Form::open(['url' => 'articles']) !!}
	<div class="form-group">
		{!! Form::label('title', 'title:') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('body', 'body:') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>

	<!-- published_at input field-->
	<div class="form-group">
		{!! Form::label('published_at', 'Publish On:') !!}
		<!-- 			type,	name,		default value, 		classes -->
		{!! Form::input('date', 'published_at',date('Y-m-d'), ['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Add article', ['class' => 'btn btn-primary form-control']) !!}
	</div>

	
				
{!! Form::close() !!}



@stop