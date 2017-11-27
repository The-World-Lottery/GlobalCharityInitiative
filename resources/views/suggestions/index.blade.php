@extends('layouts.master')


@section('divHead')
<h2 id="hoverTrigger"><strong>Suggestion Box</strong></h2>
<p id="hoverSumm" hidden class="suggBox">The suggestion box is intended for users to be able to create a post detailing a charity or cause they know needs funding or a change that they would like to see us implement on the website. Suggestion priority is determined by the amount of User upvotes on each suggestion. Admins will address the top 5 suggestions every two weeks.</p>
@stop



@section('content')
	
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a id="zeroO"  href="{{action('SuggestionsController@index')}}">All Suggestions</a></li>
  <li><a  id="zeroO" href="{{action('SuggestionsController@highest')}}">Top 5 Suggestions</a></li>
	@if(Auth::check())
	  <li><a  id="zeroO" href="{{action('SuggestionsController@create')}}">Add a Suggestion</a></li>
	@endif
	@if(Auth::check())
  		<li><a  id="zeroO" href="{{action('SuggestionsController@userssuggestions')}}">Your Suggestions</a></li>
	@endif
</ul>

	<span style="float:right;padding-right:1em;">{!! $suggestions->appends(Request::except('page'))->render() !!}</span>
	<main class="container" style="max-width:100%;">

		@foreach($suggestions as $suggestion)

			<a href="{{ action('SuggestionsController@show', $suggestion->id) }}">
				<div class ="suggHead">{{$suggestion->title}}</div>
			</a>
			@if(Auth::check())
				<a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
	            <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			@endif

			<p>{{$suggestion->content}}</p>
			<p>__By {{$suggestion->user->name}}</p>
		@endforeach
		<br>

	</main>

@stop