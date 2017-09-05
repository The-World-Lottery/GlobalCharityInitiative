@extends('layouts.master')

@section('title')

<title>All Lotteries</title>

@stop

@section('content')

	<main class="container">
		<h1>All Lotteries</h1>
	

		@foreach($lotterys as $lottery)
			<h1>{{$lottery->title}}</h1>
			<a href="{{action('LotterysController@upvote',$lottery->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('LotteryController@downvote',$lottery->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			<p>{{$lottery->content}}</p>
			<p>By {{$lottery->user->name}}</p>
			<a href="{{ action('lotteriesController@show', $lottery->id) }}">See More</a>
		@endforeach
		<br>

	
		{!! $lotterys->appends(Request::except('page'))->render() !!}

	</main>

@stop