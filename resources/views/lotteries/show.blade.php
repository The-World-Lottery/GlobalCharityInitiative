@extends('layouts.master')

@section('title')

<title>Single lottery</title>

@stop

@section('divHead')

<span>Show Lottery #{!! $lottery->id !!} </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			<div class="countdown"><h1>
				The Drawing ends in : 
				<span class="lottoClock" data-clock-id="{{$lottery->end_date}}"></span>
				</h1>
			</div>
			
			<div><strong>Starting Pot: </strong> {{$lottery->init_value}}</div>
			<div><strong>Current Pot: </strong> {{$lottery->current_value}}</div>
			<div><strong>Lotto Ends On: </strong> {{$lottery->end_date->diffForHumans()}}</div>
			<div><strong>Charity To: </strong> {{$lottery->content}}</div>
			<form action="{{ action('LotteriesController@addUserToEntries', $lottery->id) }}">
			{{-- <a href="{{ action('LotteriesController@addUserToEntries', $lottery->id) }}"> --}}
			<button type="submit" class="btn btn-primary">BUY TICKET!!!</button>
			<h5>What currency would you like to purchase a ticket with?</h5>
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
			{{-- </a> --}}
			</form>

			


			@if ((Auth::check()) && (Auth::user()->is_admin))
			  <a href="{{ action('LotteriesController@edit', $lottery->id) }}">Edit</a>

			@endif
		</div>

	</main>

@stop