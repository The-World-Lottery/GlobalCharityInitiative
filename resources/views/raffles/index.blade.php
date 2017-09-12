@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<span>All Raffles</span>
<p class="suggBox">Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>

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