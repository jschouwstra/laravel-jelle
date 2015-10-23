@extends('app')

@section('content')
<a href="{{ url('/articles') }}">Go back to articles</a>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">{{ $article->title }}</h3>
	</div>
	<div class="panel-body">
	{{ $article->body }}
	</div>
</div>
</div>

@stop