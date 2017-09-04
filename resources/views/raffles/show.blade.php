@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('content')

	<main class="container">
		<h1>This Raffle</h1>

		<h2>{{$Raffle['title']}}</h2>
		<a href="{{action('RafflesController@upvote',$Raffle->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <a href="{{action('RafflesController@downvote',$Raffle->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
		<h3>{{$Raffle['content']}}</h3>
		<p>By {{$Raffle->user->name}}</p>
		<p>posted on {{$Raffle->created_at}}</p>
		<p>Last updated on {{$Raffle->updated_at}}</p>
		@if (Auth::id() == $Raffle->user_id)
		<a href="{{ action('RafflesController@edit', $Raffle->id) }}">Edit</a>
		@endif


		
	</main>

@stop