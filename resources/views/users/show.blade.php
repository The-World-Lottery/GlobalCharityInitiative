@extends('layouts.master')

@section('title')

<title>User</title>

@stop

@section('divHead')

<span>User profile </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			<div id="showProfImg"><img src='{{substr($user->image,1,-1)}}' id="profImg"></div>
			<div><strong>Name:</strong> {{$user->name}}</div>
			<div><strong>Email:</strong> {{$user->email}}</div>
			<div><strong>User Name:</strong> {{$user->username}}</div>
			<div><strong>Member since:</strong> {{$user->created_at}}</div>
			@if(Auth::id() == $user->id)
			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
			@endif
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-primary">Edit</button></a>
			@endif
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<form method="POST" action="{{ action('UsersController@destroy', $user->id )}}">
					<button class="btn btn-large btn-primary" data-toggle="confirmation" data-title="Open Google?">Delete Account</button>
					{!! csrf_field() !!}
					{{ method_field('DELETE') }}

				</form>
			
			@endif

			
		</div>
		<div style="float: left; postion: absolute;">{{$user->name}}'s tickets:

			<ul> World Lottery
				@foreach($user->worldLotteryEntries->unique('title') as $worldLotteryEntry)
				{{-- {{dd($worldLotteryEntry)}} --}}
				<a href="{{action('TheWorldLotterysController@index')}}"><li>{{$worldLotteryEntry->theworldlottery->title}}</li></a>
				@endforeach
			</ul>
			<ul> Raffles
				@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
				<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}"><li>{{$raffleEntry->raffle->title}}</li></a>
				@endforeach
			</ul>
			<ul> Lotteries
				@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
				{{-- {{dd($lotteryEntry)}} --}}
				<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}"><li>{{$lotteryEntry->lottery->title}}</li></a>
				@endforeach
			</ul>
		</div>

	</main>

@stop