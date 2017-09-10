@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<span>All Raffles</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
	<div style="padding-top: 2em;">

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

		@foreach($raffles as $raffle)
			<a href="{{ action('RafflesController@show', $raffle->id) }}"><h1>{{$raffle->title}}</h1></a>
			<p>{{$raffle->product}}</p>
			<p>Created By : {{$raffle->user->name}}</p>
			
		@endforeach
		<br>

	
		{!! $raffles->appends(Request::except('page'))->render() !!} 
		</div>
	</main>

@stop