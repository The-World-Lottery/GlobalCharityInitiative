@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('divHead')

<span>Show Raffle #{!! $raffle->id !!} </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			<div class="countdown"><h1>
				The Drawing ends in : 
				<span class="raffleClock" data-clock-id="{{$raffle->end_date}}"></span>
				</h1>
			</div>
		<div id="showProfImg"><img src={!! $raffle->img !!}></div>
		<h2>{{$raffle['title']}}</h2>
		<h3>{{$raffle['content']}}</h3>
		<p>By: {{$raffle->user->name}}</p>
		<p>Possted On: {{$raffle->created_at}}</p>
		<p>Product: {{$raffle->product}}</p>
		<p>Last updated on: {{$raffle->updated_at}}</p>
		<p>Ends on: {{$raffle->end_date->diffForHumans()}}

		<a href="{{ action('RafflesController@addUserToEntries', $raffle->id) }}"><button class="btn btn-primary">BUY TICKET!!!</button></a>

		@if (Auth::check() && Auth::user()->is_admin)
		<a href="{{ action('RafflesController@edit', $raffle->id) }}">Edit</a>
		@endif
		</div>


		
	</main>

@stop