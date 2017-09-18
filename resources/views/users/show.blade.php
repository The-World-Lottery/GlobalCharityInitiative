@extends('layouts.master')

@section('title')

<title>User</title>

@stop


@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
	<div>
		<div class="row"  style="text-align:center;padding-top:0;">
	@if(Auth::check())
			<h3>Your Wallets</h3>
				<div style="width:100%;display:flex;justify-content:space-around;background-color:rgba(0,0,0,.4);margin:0;padding:0;">
					<div class="col walletPadding text-center">USD <br>${{number_format(Auth::user()->userWallet->usd,"2",".",",")}} </div>
				
					<div class="col walletPadding text-center">Euro<br>{{number_format(Auth::user()->userWallet->eur,"2",".",",")}} </div>
					<div class="col walletPadding text-center">Yen<br>{{number_format(Auth::user()->userWallet->jpy,"2",".",",")}} </div>
				
				
					<div class="col walletPadding text-center">Pounds<br>{{number_format(Auth::user()->userWallet->gbp,"2",".",",")}} </div>
					<div class="col walletPadding text-center">Franks<br>{{number_format(Auth::user()->userWallet->chf,"2",".",",")}} </div>
				
				
					<div class="col walletPadding text-center">Bitcoin<br>{{number_format(Auth::user()->userWallet->btc,"2",".",",")}} </div>
					<div class="col walletPadding text-center">Litecoin<br>{{number_format(Auth::user()->userWallet->ltc,"2",".",",")}} </div>
				
				
					<div class="col walletPadding text-center">Etherium<br>{{number_format(Auth::user()->userWallet->eth,"2",".",",")}} </div>
					<div class="col walletPadding text-center">Dogecoin<br>{{number_format(Auth::user()->userWallet->doge,"2",".",",")}} </div>

				
					<div class="col walletPadding text-center">Bitcoin Cash<br>{{number_format(Auth::user()->userWallet->bch,"2",".",",")}} </div>
					<div class="col walletPadding text-center">Ripple<br>{{number_format(Auth::user()->userWallet->xrp,"2",".",",")}} </div>
				</div>
			@endif
			<br>
			<div class="col col-sm-8 col-sm-offset-2">
				<div id="showProfImg"><img src='{{$user->image}}' id="profImg"></div><br>
				<div>{{$user->name}}</div>
				<div><strong>Email:</strong> {{$user->email}}</div>
				<div><strong>User Name:</strong> {{$user->username}}</div>
				{{-- <div><strong>Member since:</strong> {{$user->created_at}}</div><br> --}}
			</div>
		</div>
			<h2 style="text-align:center;">{{$user->name}}'s tickets:</h2>
		<div  class="row" style="text-align:center;">
			
			<div class="col col-xs-12 col-sm-4"> World Lottery<br>
				@foreach($user->worldLotteryEntries->unique('title') as $worldLotteryEntry)
				{{-- {{dd($worldLotteryEntry)}} --}}
				<a href="{{action('TheWorldLotterysController@index')}}">{{$worldLotteryEntry->theworldlottery->title}}</a><br>
				@endforeach
			</div>
			<div class="col col-xs-12 col-sm-4"> Raffles<br>
				@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
				<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}">{{$raffleEntry->raffle->title}}</a><br>
				@endforeach
			</div>
			<div class="col col-xs-12 col-sm-4"> Lotteries<br>
				@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
				{{-- {{dd($lotteryEntry)}} --}}
				<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}">{{$lotteryEntry->lottery->title}}</a><br>
				@endforeach
			</div>
		</div>
		<br>
		<div style="display: flex;justify-content: space-around;">
			<div>

			@if(Auth::id() == $user->id)
			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
			@endif
			</div>
			<div>
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-warning">Edit</button></a><br>
			@endif
			</div>
			
			{{-- <div>
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<form method="POST" action="{{ action('UsersController@destroy', $user->id )}}">
					<button class="btn btn-large btn-danger" data-toggle="confirmation" data-title="Open Google?">Delete Account</button>
					{!! csrf_field() !!}
					{{ method_field('DELETE') }}

				</form>
			
			@endif
			</div> --}}
		</div>
	</div>

	</main>

@stop