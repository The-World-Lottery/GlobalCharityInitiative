@extends('layouts.master')

@section('title')

<title>User</title>

@stop

@section('divHead')

<span>User profile </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
	<div>
		<div class="row"  style="text-align:center;padding-top: 2em;">
		<div class="col col-sm-8 col-sm-offset-2">
			<div id="showProfImg"><img src='{{$user->image}}' id="profImg"></div><br>
			<div><strong>Name:</strong> {{$user->name}}</div>
			<div><strong>Email:</strong> {{$user->email}}</div>
			<div><strong>User Name:</strong> {{$user->username}}</div>
			<div><strong>Member since:</strong> {{$user->created_at}}</div><br>
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-primary">Edit</button></a><br>
			@endif
			<br>
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<form method="POST" action="{{ action('UsersController@destroy', $user->id )}}">
					<button class="btn btn-large btn-primary" data-toggle="confirmation" data-title="Open Google?">Delete Account</button>
					{!! csrf_field() !!}
					{{ method_field('DELETE') }}

				</form>
			
			@endif
			<br>

			@if(Auth::id() == $user->id)
			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
			@endif
			</div>
		</div>
		<h2 style="text-align:center;">{{$user->name}}'s tickets:</h2>
		<div  class="row" style="">
			
			<div class="col col-xs-12 col-sm-4"><ul> World Lottery
				@foreach($user->worldLotteryEntries->unique('title') as $worldLotteryEntry)
				{{-- {{dd($worldLotteryEntry)}} --}}
				<a href="{{action('TheWorldLotterysController@index')}}"><li>{{$worldLotteryEntry->theworldlottery->title}}</li></a>
				@endforeach
			</ul></div>
			<div class="col col-xs-12 col-sm-4"><ul> Raffles
				@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
				<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}"><li>{{$raffleEntry->raffle->title}}</li></a>
				@endforeach
			</ul></div>
			<div class="col col-xs-12 col-sm-4"><ul> Lotteries
				@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
				{{-- {{dd($lotteryEntry)}} --}}
				<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}"><li>{{$lotteryEntry->lottery->title}}</li></a>
				@endforeach
			</ul></div>
		</div>
		</div>

	</main>

@stop