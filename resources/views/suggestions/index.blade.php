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

			<a href="{{ action('SuggestionsController@show', $suggestion->id) }}">
				<h3 class ="suggHead">{{$suggestion->title}}</h3>
			</a>
			<a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>


			<p>{{$suggestion->content}}</p>
			<p>__By {{$suggestion->user->name}}</p>
		@endforeach
		<br>

	</main>

@stop