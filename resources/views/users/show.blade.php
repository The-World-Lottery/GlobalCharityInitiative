@extends('layouts.master')

@section('title')

<title>User</title>

@stop


@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
	<div style="width:100%">
		<div class="row"  style="text-align:center;padding-top:0;width:100%;">
	
			<div class="col col-sm-12">
				<div id="showProfImg"><img src='{{$user->image}}' id="profImg"></div><br>
				<div>{{$user->name}}</div>
				<div><strong>Email:</strong> {{$user->email}}</div>
				<div><strong>User Name:</strong> {{$user->username}}</div>
				{{-- <div><strong>Member since:</strong> {{$user->created_at}}</div><br> --}}
			</div>
		</div>
			<h2 style="text-align:center;">Your tickets:</h2>
		<div  class="row" style="width:100%;text-align:center;">
			
			<div class="col col-xs-12 col-sm-4"> <u>World Lottery</u><br>
				@foreach($user->worldLotteryEntries->unique('title') as $worldLotteryEntry)
				{{-- {{dd($worldLotteryEntry)}} --}}
				<a href="{{action('TheWorldLotterysController@index')}}">{{$worldLotteryEntry->theworldlottery->title}}</a><br>
				@endforeach
			</div>
			<div class="col col-xs-12 col-sm-4"> <u>Raffles</u><br>
				@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
				<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}">{{$raffleEntry->raffle->title}}</a><br>
				@endforeach
			</div>
			<div class="col col-xs-12 col-sm-4"> <u>Lotteries</u><br>
				@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
				{{-- {{dd($lotteryEntry)}} --}}
				<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}">{{$lotteryEntry->lottery->title}}</a><br>
				@endforeach
			</div>
		</div>
		<br>
		<div style="display: flex;justify-content:center;">
			<div>

				@if(Auth::id() == $user->id)
				<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-success">Logout</button></a>
				@endif
				</div>
				<div>
				@if(Auth::id() == $user->id || Auth::user()->is_admin) 
					<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-warning">Edit</button></a><br>
				@endif
			</div>
			

		</div>
	</div>

	</main>

@stop