@extends('layouts.master')


@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a href="{{action('SuggestionsController@index')}}">All Suggestions</a></li>
  <li><a href="{{action('SuggestionsController@highest')}}">Top 5 Suggestions</a></li>
  <li><a href="{{action('SuggestionsController@create')}}">Add a Suggestion</a></li>
   <li><a href="{{action('SuggestionsController@userssuggestions')}}">Your Suggestions</a></li>

</ul>
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