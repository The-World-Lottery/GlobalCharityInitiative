@extends('layouts.master')

@section('title')

<title>All Suggestions</title>

@stop

@section('divHead')

<span>All Suggestions</span>

@stop

@section('content')

	<span style="float:right;padding-right:1em;">{!! $suggestions->appends(Request::except('page'))->render() !!}</span>
	<main class="container" style="max-width:100%;float:left;">

		@foreach($suggestions as $suggestion)
			<h3 class="suggHead">{{$suggestion->title}}</h3>
			{{-- <a href="{{action('suggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a> --}}
            {{-- <a href="{{action('suggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a> --}}
			<p>{{$suggestion->content}}</p>
			<p>By {{$suggestion->user->name}}</p>
			{{-- <a href="{{ action('suggestionsController@show', $suggestion->id) }}">See More</a> --}}
		@endforeach
		<br>

	</main>

@stop