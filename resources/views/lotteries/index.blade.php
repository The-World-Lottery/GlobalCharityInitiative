@extends('layouts.master')

@section('title')

<title>All Lotteries</title>

@stop

@section('divHead')

<h2><strong>All Lotteries</strong></h2>
<p class="suggBox">Lotteries are created with an initial value coming from the world lottery foundation. When the date/time of each lottery is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>
@stop

@section('content')
	<main class="container" style="max-width:100%;float:left;">
		<div>
			@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        	@endif
			<div class="row">
				@foreach($lotteries as $lottery)
				<div class="indivLottoCont col col-sm-4  col-xs-12"
				style=''
				>
				<a href="{{ action('LotteriesController@show', $lottery->id) }}">
					<h4 class ="suggHead">{{$lottery->title}}</h4>
				</a>
				<p style="background-color:rgba(0,0,0,.5);border-radius:.5em;">Current Estimated Value : <br><strong style="font-size:1.9em;color:lightgreen">${{number_format(($lottery->current_value),2,".",",")}}</strong></p>
				<p>Lottery Ends : <strong style="color:#00ffc4;">{{$lottery->end_date->diffForHumans()}}</strong></p>
				<p>"{{$lottery->content}}"</p>
				</div>




					{{-- <p>Initial Value : {{$lottery->init_value}}</p> --}}
				@endforeach
			</div>
		<span style="float:right;padding-right:1em;">{!! $lotteries->appends(Request::except('page'))->render() !!}</span>
		<br>
		</div>
	</main>

@stop