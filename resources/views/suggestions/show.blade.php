@extends('layouts.master')

@section('title')

<title>Single suggestion</title>

@stop

@section('content')

	<main class="container">
		<h1>This suggestion</h1>

		<h2>{{$suggestion['title']}}</h2>
		<a href="{{action('suggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <a href="{{action('suggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
		<h3>{{$suggestion['content']}}</h3>
		<p>By {{$suggestion->user->name}}</p>
		<p>posted on {{$suggestion->created_at}}</p>
		<p>Last updated on {{$suggestion->updated_at}}</p>
		@if (Auth::id() == $suggestion->user_id)
		<a href="{{ action('suggestionsController@edit', $suggestion->id) }}">Edit</a>
		@endif


		
	</main>

@stop