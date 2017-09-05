@extends('layouts.master')

@section('title')

<title>Creat a suggestion</title>

@stop

@section('divHead')

<span>Throw a suggestion in the box</span>

@stop

@section('content')

	<main class="container">
		<form method="POST" action="{{ action('SuggestionsController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			<input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title">
			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<input type="text" name="content" id="content" value="{{ old('content') }}" placeholder="content">
			{!! $errors->first('url', '<span class="help-block">:message</span>')!!}
			<input type="text" name="url" id="url" value="{{ old('url') }}" placeholder="url">
			<button>Submit</button>
		</form>
	</main>
@stop