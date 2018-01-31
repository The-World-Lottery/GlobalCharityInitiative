@extends('layouts.master')

@section('title')

<title>User</title>

@stop


@section('content')

	@if(Auth::id() == $user->id)
	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row">	
			<div class="col-sm-12 text-center">
				<a style="margin-right:1em;" href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-success cleargreenBtn">Logout</button></a>
				@if(Auth::id() == $user->id || Auth::user()->is_admin) 
					<a href="{{action('UsersController@edit', $user->id)}}"><button class="btn btn-warning">Edit</button></a>
				@endif
			</div>
			<div class="col-sm-12 col" style="background-color:rgba(0,0,0,.4);padding:1em 0 1em 0;margin-top: 1.5em;border-radius: 2em;">
				<div class="col-sm-4 col-sm-offset-2 col" {{-- id="showProfImg" --}}>
					<img src='{{$user->image}}' id="profImg">
					{{-- <img src='{{substr($user->image,1,-1)}}' id="profImg"> --}}
				</div>
				<blockquote class="col-sm-6 col" style="">
					<h2>
						{{$user->name}}
					</h2>
					<b><u>Email:</u></b><br> {{$user->email}}<br>
					<b><u>User Name:</u></b><br> {{$user->username}}<br>
					<b><u>Phone Number:</u></b><br> {{$user->phone_number}}<br>
				</blockquote>
			</div>
			<div class="col col-sm-12">
				<h1 style="padding-top:.5em;text-align:center;color:lightgreen;">YOUR CURRENT TICKETS</h1>
				<div  class="row">
					{{-- <div class="col-xs-12 col-sm-4"> <h3 class="ticketHead">Lotteries</h3>
						@foreach($user->lotteryEntries->unique('lottery_id') as $lotteryEntry)
							@if(\App\Models\Lottery::where('id', $lotteryEntry->lottery->id)->get()[0]->complete == 0)
								<a href="{{action('LotteriesController@show', $lotteryEntry->lottery->id)}}">
									<span style="color:lightgreen;">x{{\App\Models\LotteryEntry::where('lottery_id',$lotteryEntry->lottery->id)->where('user_id', $user->id)->count()}}</span> - {{$lotteryEntry->lottery->title}} #{{$lotteryEntry->lottery->id}}
								</a>
								<br>
							@endif
						@endforeach
					</div> --}}
					<div class="col-xs-12 col-sm-8"><h3 class="ticketHead">Raffles</h3>
						@foreach($user->raffleEntries->unique('raffles_id') as $raffleEntry)
							@if(\App\Models\Raffle::where('id', $raffleEntry->raffle->id)->get()[0]->complete == 0)
								<a href="{{action('RafflesController@show', $raffleEntry->raffle->id)}}">
									<span style="color:lightgreen;">x{{\app\Models\RaffleEntry::where('raffles_id',$raffleEntry->raffle->id)->where('user_id', $user->id)->count()}}</span> - {{$raffleEntry->raffle->title}}
								</a>
								<br>
							@endif
						@endforeach
					</div>
					<div class="col-xs-12 col-sm-4"> <h3 class="ticketHead">World Lottery</h3>
						@foreach($user->worldLotteryEntries->unique('the_world_lottery_id') as $worldLotteryEntry)
							@if(\App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]->id == $worldLotteryEntry->theworldlottery->id)
								<a href="{{action('TheWorldLotterysController@index')}}">{{$worldLotteryEntry->theworldlottery->title}}
								</a>
								<br>
							@endif
						@endforeach
					</div>
				</div>
			</div>
			<div class="col col-sm-12" style="margin-bottom:3em;">
				@if(count($suggestions))
					<div style="margin-top:1em;">
					<h1 style="text-align:center;color:lightgreen;margin-top:2em;">YOUR SUGGESTIONS</h1>
			        @foreach($suggestions as $suggestion)
			            <a href="{{ action('SuggestionsController@show', $suggestion->id) }}">
			                <div class ="suggHead">{{$suggestion->title}}</div>
			            </a>
			            <a href="{{action('SuggestionsController@upvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
			            <a href="{{action('SuggestionsController@downvote',$suggestion->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			            <p>{{$suggestion->content}}</p>
			        @endforeach
			        </div>
			    @else
			        <div style="text-align:center;margin-top:2em;">
				        <h1 style="color:lightgreen">YOU HAVE NO SUGGESTIONS</h1>
				        <br>
				        <div>CLICK TO ADD A SUGGESTION</div>
				       	<a href="{{action('SuggestionsController@create')}}"> <button class="btn btn-success cleargreenBtn">GO!</button></a>
			       	</div>
			    @endif
			</div>
		</div>
	</main>
	@endif

@stop