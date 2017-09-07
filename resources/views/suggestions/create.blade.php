@extends('layouts.master')

@section('title')

<title>Creat a suggestion</title>

@stop

@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li><a href="{{action('SuggestionsController@index')}}">All Suggestions</a></li>
  <li><a href="{{action('SuggestionsController@highest')}}">Top 5 Suggestions</a></li>
  <li class="active"><a href="{{action('SuggestionsController@create')}}">Add a Suggestion</a></li>
  <li><a href="{{action('SuggestionsController@userssuggestions')}}">Your Suggestions</a></li>
</ul>
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