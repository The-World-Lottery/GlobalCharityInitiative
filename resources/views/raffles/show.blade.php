@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('divHead')

{{-- <span>Raffle #{!! $raffle->id !!} </span> --}}

@stop

@section('content')

	<main class="row" style="text-align:center;">
		<div class="col-xs-12 col-sm-12 col paddingMobile text-center" >
			<h1 style="font-size: 250%;margin-bottom:1em;">{{$raffle['title']}}</h1>
			<div class="countdown">
				<h3>
					The Drawing Ends: <br> {{ $raffle->end_date->diffForHumans() }}
				</h3>
				<img style="max-height:16em;border-radius:1em;box-shadow: 20px 20px 20px rgba(0,0,0,.6);" src={!! $raffle->img !!}>
			</div>
			<h3 style="margin-top: 1.5em;">Description: </h3>
			<p>{{$raffle['product']}}</p>
			<h3>Charity:</h3>
			<p>{{$raffle['content']}}</p>
			@if (Auth::check() && Auth::user()->is_admin)
			<a href="{{ action('RafflesController@edit', $raffle->id) }}"><div  class="btn btn-warning">Edit</div></a>
			@endif
		</div>
		{{-- <div class="col-xs-12 col-sm-6 col paddingMobile" >
				<h2>{{$raffle->product}}</h2>
				<form action="{{ action('RafflesController@addUserToEntries', $raffle->id) }}">
				
				<h5 style="color:#3cc2d0;font-size:1.5em;">What currency would you like to purchase a ticket with?</h5>
				<select name="currency" class="selectpicker">
					<optgroup label="National Currencies">
						<option value="usd">Dollars</option>
						<option value="eur">Euros</option>
						<option value="jpy">Japanese Yen</option>
						<option value="gbp">Pounds</option>
						<option value="chf">Swiss Franks</option>
					</optgroup>
					<optgroup label="Cryptocurrencies">
						<option value="btc">Bitcoin</option>
						<option value="ltc">Litecoin</option>
						<option value="eth">Etherium</option>
						<option value="doge">Dogecoin</option>
						<option value="bch">Bitcoin Cash</option>
						<option value="xrp">Ripple</option>
					</optgroup>
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
				<button type="submit" class="btn btn-success">GET A TICKET</button>
			
			</form>
			
			<br>

		</div> --}}

		
	</main>

@stop