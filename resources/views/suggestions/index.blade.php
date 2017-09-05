@extends('layouts.master')

@section('title')

<title>All Suggestions</title>

@stop

@section('content')

	<main class="container" style="max-width:100%">
		<h1>All Suggestions</h1>
	

		@foreach($suggestions as $suggestion)
			<h1>{{$suggestion->title}}</h1>
			<a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			<p>{{$suggestion->content}}</p>
			<p>By {{$suggestion->user->name}}</p>
			<a href="{{ action('SuggestionsController@show', $suggestion->id) }}">See More</a>
		@endforeach
		<br>

	
		{!! $suggestions->appends(Request::except('page'))->render() !!}

	</main>

@stop