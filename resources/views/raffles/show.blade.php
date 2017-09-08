@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('divHead')

<span>Show Raffle #{!! $raffle->id !!} </span>

@stop

@section('content')

	<main class="container">
		<h1>This Raffle</h1>

		<h2>{{$raffle['title']}}</h2>
		<h3>{{$raffle['content']}}</h3>
		<p>By {{$raffle->user->name}}</p>
		<p>posted on {{$raffle->created_at}}</p>
		<p>Last updated on {{$raffle->updated_at}}</p>
		@if (Auth::check() && Auth::user()->is_admin)
		<a href="{{ action('RafflesController@edit', $raffle->id) }}">Edit</a>
		@endif


		
	</main>

@stop