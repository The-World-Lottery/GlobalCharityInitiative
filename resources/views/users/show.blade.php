@extends('layouts.master')

@section('title')

<title>User</title>

@stop


@section('content')

	<main class="container-fluid" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row"  style="padding-top:10%;width:100%;">
	
			<div class="col col-sm-3">
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
			
			<div class="col col-sm-9">
	
				<h1 style="text-align:center;color:yellow;">YOUR CURRENT TICKETS</h1>
				<div  class="row">
					<div class="col col-xs-12 col-sm-4"><h3 class="ticketHead">Raffles</h3><br>
						@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
							@if(\App\Models\Raffle::where('id', $raffleEntry->raffle->id)->get()[0]->complete == 0)
								<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}">{{$raffleEntry->raffle->title}} x{{\app\Models\RaffleEntry::where('raffles_id',$raffleEntry->raffle->id)->count()}}</a><br>
							@endif
						@endforeach
					</div>
					<div class="col col-xs-12 col-sm-4"> <h3 class="ticketHead">Lotteries</h3><br>
						@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
						{{-- {{dd($lotteryEntry)}} --}}
							@if(\App\Models\Lottery::where('id', $lotteryEntry->lottery->id)->get()[0]->complete == 0)
								<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}">{{$lotteryEntry->lottery->title}}</a><br>
							@endif
						@endforeach
					</div>
					<div class="col col-xs-12 col-sm-4"> <h3 class="ticketHead">World Lottery</h3><br>
						@foreach($user->worldLotteryEntries->unique('the_world_lottery_id') as $worldLotteryEntry)
							@if(\App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]->id == $worldLotteryEntry->theworldlottery->id))
								<a href="{{action('TheWorldLotterysController@index')}}">{{$worldLotteryEntry->theworldlottery->title}}</a><br>
							@endif
						@endforeach
					</div>
				</div>
			</div>
		</div>

	</main>

@stop