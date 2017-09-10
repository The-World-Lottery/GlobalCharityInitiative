@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<span>The World Lottery </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			
			<div><strong>Starting Pot: </strong> {{$theWorldLottery->init_value}}</div>
			<div><strong>Current Pot: </strong> {{$theWorldLottery->current_value}}</div>
			<div><strong>Lotto Ends On: </strong> {{$theWorldLottery->end_date}}</div>
			<div><strong>Charity To: </strong> {{$theWorldLottery->content}}</div>

			<a href=""><button class="btn btn-primary">BUY TICKET!!!</button></a>

			


			@if ((Auth::check()) && (Auth::user()->is_admin))
			  <a href="{{ action('LotteriesController@edit', $lottery->id) }}">Edit</a>

			@endif
		</div>

	</main>

@stop