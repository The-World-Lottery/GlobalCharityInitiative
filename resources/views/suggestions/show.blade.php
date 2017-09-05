@extends('layouts.master')

@section('title')

<title>Single suggestion</title>

@stop

@section('divHead')

<span>Suggestion #{{$suggestion->id}} </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">

		<h2>{{$suggestion['title']}}</h2>
		<a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
		<p>{{$suggestion['content']}}</p>
		<p>By {{$suggestion->user->name}}</p>
		<p>posted on {{$suggestion->created_at}}</p>
		<p>Last updated on {{$suggestion->updated_at}}</p>
		@if (Auth::id() == $suggestion->user_id)
		<a href="{{ action('SuggestionsController@edit', $suggestion->id) }}">Edit</a>
		@endif


		
	</main>

@stop