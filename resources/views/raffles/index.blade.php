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
		{!! $raffles->appends(Request::except('page'))->render() !!} 
	<div style="padding-top: 2em;">

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

		@foreach($raffles as $raffle)
		<div style="max-width:31.3%;float:left;border:1px solid black;height:25vh;padding:2em 1em 1em 1em ;margin:1%;overflow:hidden;">
			<a href="{{ action('RafflesController@show', $raffle->id) }}"><h4>{{$raffle->title}}</h4></a>
			<p>{{$raffle->product}}</p>
			<p>Created By : {{$raffle->user->name}}</p>
		</div>
			
		@endforeach
		<br>

	
		</div>
	</main>

@stop