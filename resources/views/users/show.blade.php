@extends('layouts.master')

@section('title')

<title>User</title>

@stop


@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row"  style="text-align:center;padding-top:10%;width:100%;">
	
			<div class="col col-sm-4">
				<div style="display: flex;justify-content:center;">
					<div>
						@if(Auth::id() == $user->id)
						<a style="margin-right:1em;" href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-success">Logout</button></a>
						@endif
						</div>
						<div>
						@if(Auth::id() == $user->id || Auth::user()->is_admin) 
							<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-warning">Edit</button></a><br>
						@endif
					</div>
					<br>
					<br>
				</div>
				<div id="showProfImg">
					<img src='{{$user->image}}' id="profImg">
					<img src='{{substr($user->image,1,-1)}}' id="profImg">

				</div><br>
				<h1>
					{{$user->name}}
				</h1>
				<div>
					<strong>Email:</strong> {{$user->email}}
				</div>
				<div>
					<strong>User Name:</strong> {{$user->username}}
					<br>
					<br>
				</div>
			</div>
			
			<div class="col col-sm-8">
	
				<h1 style="text-align:center;color:yellow;">YOUR TICKETS</h1>
				<div  class="row" style="width:100%;text-align:center;">
					<div class="col col-xs-12 col-sm-4"> <u class="ticketHead">World Lottery</u><br>
						@foreach($user->worldLotteryEntries->unique('the_world_lottery_id') as $worldLotteryEntry)
						{{-- {{dd($worldLotteryEntry)}} --}}
						<a href="{{action('TheWorldLotterysController@index')}}">{{$worldLotteryEntry->theworldlottery->title}}</a><br>
						@endforeach
					</div>
					<div class="col col-xs-12 col-sm-4"> <u class="ticketHead">Raffles</u><br>
						@foreach($user->raffleEntries->unique('raffle_id') as $raffleEntry)
						<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}">{{$raffleEntry->raffle->title}}</a><br>
						@endforeach
					</div>
					<div class="col col-xs-12 col-sm-4"> <u class="ticketHead">Lotteries</u><br>
						@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
						{{-- {{dd($lotteryEntry)}} --}}
						<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}">{{$lotteryEntry->lottery->title}}</a><br>
						@endforeach
					</div>
				</div>
			</div>
		</div>

	</main>

@stop