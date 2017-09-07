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
			<a href="{{ action('RafflesController@show', $raffle->id) }}"><h1>{{$raffle->title}}</h1></a>
			<p>{{$raffle->content}}</p>
			<p>By {{$raffle->user->name}}</p>
			
		@endforeach
		<br>

	
		{!! $raffles->appends(Request::except('page'))->render() !!} 

	</main>

@stop