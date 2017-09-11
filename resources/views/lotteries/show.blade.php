@extends('layouts.master')

@section('title')

<title>Single lottery</title>

@stop

@section('divHead')

<span>Show Lottery #{!! $lottery->id !!} </span>

@stop
n
@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			
			<div><strong>Starting Pot: </strong> {{$lottery->init_value}}</div>
			<div><strong>Current Pot: </strong> {{$lottery->current_value}}</div>
			<div><strong>Lotto Ends On: </strong> {{$lottery->end_date->diffForHumans()}}</div>
			<div><strong>Charity To: </strong> {{$lottery->content}}</div>

			<a href="{{ action('LotteriesController@addUserToEntries', $lottery->id) }}"><button class="btn btn-primary">BUY TICKET!!!</button></a>

			


			@if ((Auth::check()) && (Auth::user()->is_admin))
			  <a href="{{ action('LotteriesController@edit', $lottery->id) }}">Edit</a>

			@endif
		</div>

	</main>

@stop