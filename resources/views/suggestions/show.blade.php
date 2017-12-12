@extends('layouts.master')

@section('title')

{{-- <title>Suggestion</title> --}}

@stop

@section('divHead')

<span>Suggestion #{{($suggestion->id)-1}} </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;">

		<h2 class="text-center">{{$suggestion['title']}}</h2>
		@if(Auth::check())
		<div style="display:flex;justify-content: center;">
			<a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
	        <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
	    </div>
	    @endif
		<p>{{$suggestion['content']}}</p>
		<p>By {{$suggestion->user->name}}</p>
		<p>posted on {{$suggestion->created_at}}</p>
		<p>Last updated on {{$suggestion->updated_at}}</p>
		@if (Auth::check() && (Auth::id() == $suggestion->user_id || Auth::user()->is_admin))
		<a href="{{ action('SuggestionsController@edit', $suggestion->id) }}">Edit</a>
		@endif

	
		
	</main>

@stop