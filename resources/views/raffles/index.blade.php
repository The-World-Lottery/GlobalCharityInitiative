@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<h2><strong>All Raffles</strong></h2>
<p class="suggBox">Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. Our hope is that we will become large enough for celebrities to donate "A day with a fan" or something of the like. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>
		{!! $raffles->appends(Request::except('page'))->render() !!} 

@stop

@section('content')
	
	<main class="container" style="max-width:100%;float:left;">
	
            

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

		@foreach($raffles as $raffle)
		<div style='position:relative;color:white;background-position:center;background-size:110% 110%;background-image:url("{{$raffle->img}}");text-align:center;max-width:31.3%;float:left;border-radius:1em;height:25vh;padding:0em 1em 1em 1em ;margin:1%;overflow:hidden;'>
			<a style="color:lightblue" href="{{ action('RafflesController@show', $raffle->id) }}"><h4 style="border-radius:6px;padding:8px;background-color:rgba(0,0,0,.5);">{{$raffle->title}}</h4></a>
		<div class="raffleContent">
			<p style="margin-top:0%;">{{$raffle->product}}</p>
			{{-- <p>Created By : {{$raffle->user->name}}</p> --}}
		</div>
			<p style="border-radius:6px;width:88%;position:absolute;bottom:0;background-color:rgba(0,0,0,.5);padding:4px;">Drawing Happens : <span style="color:#00ffc4;">{{$raffle->end_date->diffForHumans()}}</span></p>
		</div>
			

		@endforeach
		<br>

			{{-- get cody to help this work for each raffle --}}
			{{-- <span class="raffleClock" data-clock-id="{{$raffle->end_date}}"></span> --}}
	

	</main>

@stop