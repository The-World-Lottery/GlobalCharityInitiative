@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<span>All Raffles</span>

@stop

@section('content')

	<main class="container">
		<h1>All Raffles</h1>
	

		@foreach($raffles as $raffle)
			<h1>{{$raffle->title}}</h1>
			<a href="{{action('rafflesController@upvote',$raffle->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('rafflesController@downvote',$raffle->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			<p>{{$raffle->content}}</p>
			<p>By {{$raffle->user->name}}</p>
			<a href="{{ action('rafflesController@show', $raffle->id) }}">See More</a>
		@endforeach
		<br>

	
		{!! $raffles->appends(Request::except('page'))->render() !!}

	</main>

@stop