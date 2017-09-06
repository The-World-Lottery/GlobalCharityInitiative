@extends('layouts.master')

@section('title')

<title>Creat a suggestion</title>

@stop

@section('divHead')

<span>Throw a suggestion in the box</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<form method="POST" action="{{ action('SuggestionsController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title">


			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}

			
			<textarea class="form-control" type="text" name="content" id="content" placeholder="content">{{ old('content') }}</textarea>


			<button class="btn btn-primary">Submit</button>
		</form>
	</main>
@stop