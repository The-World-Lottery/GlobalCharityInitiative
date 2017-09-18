@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<h3>The World Lottery </h3>

@stop

@section('content')
	<p class="suggBox" style="padding:0 5em 0 5em ;text-align:center;">The World Lottery drawing happens every two weeks. Winning numbers selected with a random number generator. The Jackpot value is fed by ticket purchases to any Lottery, Raffle or currently running World Lottery.</p>

	<main class="container" style="text-align:center;max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="margin-top:15%;">
			<div><h2 style="color:#00ffc4;">Drawing takes place in: <span class="worldLottoClock" data-clock-id="{{\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['end_date']}}"></span>
				</div> </h2>
			
			<h4><strong>Starting Pot : $</strong> {{number_format($theWorldLottery->init_value,2,".",",")}}</h4>
			<h4><strong>Current Pot: $</strong> {{number_format($theWorldLottery->current_value,2,".",",")}}</h4>
			<h4><strong>Lotto Ends On: </strong> {{$theWorldLottery->end_date}}</h4>
			



			<a href="{{ action('TheWorldLotterysController@addUserToEntries', $theWorldLottery->id) }}"><button class="btn btn-primary">BUY TICKET!!!</button></a><br><br>

			@if ((Auth::check()) && (Auth::user()->is_admin))
			  <a href="{{ action('TheWorldLotterysController@edit', $theWorldLottery->id) }}"><button class="btn btn-warning">Edit</button></a>

			@endif
		</div>

	</main>

@stop