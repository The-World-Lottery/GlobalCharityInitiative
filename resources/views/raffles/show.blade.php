@extends('layouts.master')

@section('title')

<title>Single Raffle</title>

@stop

@section('divHead')

<span>Show Raffle #{!! $raffle->id !!} </span>

@stop

@section('content')

	<main class="container" style="text-align:center;max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 0;">
		<h2>{{$raffle['title']}}</h2>
			<div class="countdown"><h1>
				The Drawing ends in : 
				<span class="raffleClock" data-clock-id="{{$raffle->end_date}}"></span>
				</h1>
			</div>
		<div id="showProfImg" style="display:flex;justify-content:center;width:100%;"><img style="width:18em;" src={!! $raffle->img !!}></div>
		<h3>{{$raffle['content']}}</h3>
		<p>By: {{$raffle->user->name}}</p>
		<p>Possted On: {{$raffle->created_at}}</p>
		<p>Product: {{$raffle->product}}</p>
		<p>Last updated on: {{$raffle->updated_at}}</p>
		<p>Ends on: {{$raffle->end_date}}

		{{-- <a href="{{ action('RafflesController@addUserToEntries', $raffle->id) }}"><button class="btn btn-primary">BUY TICKET!!!</button></a> --}}

		<form action="{{ action('RafflesController@addUserToEntries', $raffle->id) }}">
			
			<h5 style="color:yellow;">What currency would you like to purchase a ticket with?</h5>
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
			<input hidden id="usdXRP" name="xrpConv"><br>
			<button type="submit" class="btn btn-primary">BUY TICKET!!!</button>
		
		</form>

		@if (Auth::check() && Auth::user()->is_admin)
		<a href="{{ action('RafflesController@edit', $raffle->id) }}">Edit</a>
		@endif
		</div>


		
	</main>

@stop