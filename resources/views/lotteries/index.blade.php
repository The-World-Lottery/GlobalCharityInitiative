@extends('layouts.master')

@section('title')

<title>All Lotteries</title>

@stop

@section('divHead')

<span>All Lotteries</span>
<p class="suggBox">Lotteries are created with an initial value coming from the world lottery foundation. When the date/time of each lottery is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>
@stop

@section('content')
	<span style="float:right;padding-right:1em;">{!! $lotteries->appends(Request::except('page'))->render() !!}</span>
	<main class="container" style="max-width:100%;float:left;">
		<div>
			@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        	@endif
			<div class="row">
				@foreach($lotteries as $lottery)
				<div class="col col-sm-4  col-xs-12"
				style="padding:1em;min-height:25vh;text-align:center"
				>
				<a href="{{ action('LotteriesController@show', $lottery->id) }}">
					<h4 class ="suggHead">{{$lottery->title}}</h4>
				</a>
				<p>"{{$lottery->content}}"</p>
				<p>Current Estimated Value :<strong style="color:lightgreen">${{number_format(($lottery->current_value),2,".",",")}}</strong></p>
				<p>Lottery Ends : <strong style="color:red;">{{$lottery->end_date->diffForHumans()}}</strong></p>
				</div>




					{{-- <p>Initial Value : {{$lottery->init_value}}</p> --}}
				@endforeach
			</div>
		<br>
		</div>
	</main>

@stop