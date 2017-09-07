@extends('layouts.master')

@section('title')

<title>All Lotteries</title>

@stop

@section('divHead')

<span>All Lotteries</span>

@stop

@section('content')
	<span style="float:right;padding-right:1em;">{!! $lotteries->appends(Request::except('page'))->render() !!}</span>
	<main class="container" style="max-width:100%;float:left;">

		<h1>All Lotteries</h1>
	

			@foreach($lotteries as $lottery)

			<a href="{{ action('LotteriesController@show', $lottery->id) }}">
				<h3 class ="suggHead">{{$lottery->title}}</h3>
			</a>
			<p>{{$lottery->init_value}}</p>
			<p>{{$lottery->current_value}}</p>
			<p>{{$lottery->end_date}}</p>

			<p>{{$lottery->content}}</p>

		@endforeach
		<br>
	</main>

@stop