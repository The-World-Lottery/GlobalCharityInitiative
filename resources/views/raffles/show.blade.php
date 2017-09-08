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
		<div id="showProfImg"><img src={!! $raffle->img !!}></div>
		<h2>{{$raffle['title']}}</h2>
		<h3>{{$raffle['content']}}</h3>
		<p>By {{$raffle->user->name}}</p>
		<p>posted on {{$raffle->created_at}}</p>
		<p>Last updated on {{$raffle->updated_at}}</p>

		<a href="{{ action('RafflesController@addUserToEntries', $raffle->id) }}"><button class="btn btn-primary">BUY TICKET!!!</button></a>

		@if (Auth::check() && Auth::user()->is_admin)
		<a href="{{ action('RafflesController@edit', $raffle->id) }}">Edit</a>
		@endif
		</div>


		
	</main>

@stop