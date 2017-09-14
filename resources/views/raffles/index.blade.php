@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<span>All Raffles</span>
<p class="suggBox">Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. Our hope is that we will become large enough for celebrities to donate "A day with a fan" or something of the like. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>

@stop

@section('content')
	
	<main class="container" style="max-width:100%;float:left;">
		{!! $raffles->appends(Request::except('page'))->render() !!} 
	<div style="padding-top: 2em;">

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

		@foreach($raffles as $raffle)
		<div style="text-align:center;max-width:31.3%;float:left;border:1px solid black;border-radius:1em;height:25vh;padding:0em 1em 1em 1em ;margin:1%;overflow:hidden;">
			<a href="{{ action('RafflesController@show', $raffle->id) }}"><h4>{{$raffle->title}}</h4></a>
			<p>{{$raffle->product}}</p>
			<p>Drawing Happens : <span style="color:red">{{$raffle->end_date->diffForHumans()}}</span></p>
			{{-- get cody to help this work for each raffle --}}
			{{-- <span class="raffleClock" data-clock-id="{{$raffle->end_date}}"></span> --}}
			<p>Created By : {{$raffle->user->name}}</p>
		</div>
			
		@endforeach
		<br>

	
		</div>
	</main>

@stop