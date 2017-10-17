@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('divHead')

<span>Raffle #{!! $raffle->id !!} </span>

@stop

@section('content')

	<main class="row" style="text-align:center;">
		<div class="col-xs-12 col-sm-6 col" style="min-height:60vh;">
			<h1>{{$raffle['title']}}</h1>
				<div class="countdown"><h2>
					This Drawing ends in : 
					<span class="raffleClock" data-clock-id="{{$raffle->end_date}}"></span>
					</h2>
			<img style="max-height:16em;border-radius:1em;margin-bottom:" src={!! $raffle->img !!}>
				</div>
		</div>
		<div class="col-xs-12 col-sm-6 col" style="padding-top:4em;">
				<h2>{{$raffle->product}}</h2>
				<form action="{{ action('RafflesController@addUserToEntries', $raffle->id) }}">
				
				<h5 style="color:yellow;font-size:1.5em;">What currency would you like to purchase a ticket with?</h5>
				<select name="currency">
					<option value="usd">Dollars</option>
					<option value="eur">Euros</option>
					<option value="jpy">Japanese Yen</option>
					<option value="gbp">Pounds</option>
					<option value="chf">Swiss Franks</option>
					<option value="btc">Bitcoin</option>
					<option value="ltc">Litecoin</option>
					<option value="eth">Etherium</option>
					<option value="doge">Dogecoin</option>
					<option value="bch">Bitcoin Cash</option>
					<option value="xrp">Ripple</option>
				</select>
				<input hidden id="usdEUR" name="eurConv">
				<input hidden id="usdJPY" name="jpyConv">
				<input hidden id="usdGBP" name="gbpConv">
				<input hidden id="usdCHF" name="chfConv">
				<input hidden id="usdBTC" name="btcConv">
				<input hidden id="usdLTC" name="ltcConv">
				<input hidden id="usdETH" name="ethConv">
				<input hidden id="usdDoge" name="dogeConv">
				<input hidden id="usdBCH" name="bchConv">
				<input hidden id="usdXRP" name="xrpConv"><br><br>
				<button type="submit" class="btn btn-success">BUY TICKET!!!</button>
			
			</form>
			
			<br>

			@if (Auth::check() && Auth::user()->is_admin)
			<a href="{{ action('RafflesController@edit', $raffle->id) }}"><button style="margin-bottom:3em;" class="btn btn-warning">Edit</button></a>
			@endif
		</div>

		
	</main>

@stop