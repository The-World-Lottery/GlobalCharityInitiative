@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<h3 id="hoverTrigger">The World Lottery </h3>
	<p id="hoverSumm" hidden class="suggBox" style="padding:0 5em 0 5em ;text-align:center;">The World Lottery drawing happens every two weeks. Winning numbers selected with a random number generator. The Jackpot value is fed by ticket purchases to any Lottery, Raffle or currently running World Lottery.</p>

@stop

@section('content')
	

	<main style="text-align:center;">
		<div>
			<h1 style="color:#00ffc4;">Drawing takes place in: <span class="worldLottoClock" data-clock-id="{{\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['end_date']}}"></span></h1>
			
			<h4 id="jackpot" style="color:lightgreen;"><strong >Jackpot</strong><br>$ {{number_format($theWorldLottery->current_value,2,".",",")}}</h4>
			
		

			<a href="{{ action('TheWorldLotterysController@addUserToEntries', $theWorldLottery->id) }}"><button class="btn btn-success">Pick Your Numbers!</button></a><br><br>

			@if ((Auth::check()) && (Auth::user()->is_admin))
			  <a href="{{ action('TheWorldLotterysController@edit', $theWorldLottery->id) }}"><button style="margin-bottom: 2em;" class="btn btn-warning">Edit</button></a>

			@endif
		</div>

	</main>

@stop