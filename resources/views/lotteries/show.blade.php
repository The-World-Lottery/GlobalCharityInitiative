@extends('layouts.master')

@section('title')

<title>Single lottery</title>

@stop

@section('divHead')

<h2><strong>Show Lottery #{!! ($lottery->id)-1 !!} </strong></h2>

@stop

@section('content')

	<main class="container" style="text-align:center;max-width:100%;display:flex;justify-content: center;">
		<div class="row">
			<div class="col-sm-6 paddingMobile">
				<h1 style="color:lightgreen;">Current Pot<br><strong style="font-size:2em;">${{number_format($lottery->current_value,2,".",",")}}</strong>
				</h1>
				<div class="countdown">
					<h2>
					The Drawing ends in : <br>
					<span class="lottoClock" data-clock-id="{{$lottery->end_date}}"></span>
					</h2>
				</div>
			</div>
			<div class="col-sm-6 paddingMobile">
				{{-- <div><strong>Human Comment:<br> </strong>"{{$lottery->content}}"</div> --}}
				<form action="{{ action('LotteriesController@addUserToEntries', $lottery->id) }}">
			
					<h5 style="color:#3cc2d0;font-size:1.5em;">What currency would you like to purchase a ticket with?</h5>
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
					<button type="submit" class="btn btn-success">BUY TICKET!!!</button>	@if ((Auth::check()) && (Auth::user()->is_admin))
				  <a href="{{ action('LotteriesController@edit', $lottery->id) }}"><button class="btn btn-warning">Edit</button></a>

				@endif
				</form>
				<br>
			</div>
		</div>

	</main>

@stop