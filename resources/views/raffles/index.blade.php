@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<span>All Raffles</span>

@stop

@section('content')

	<main class="container">
		<h1>All Raffles</h1>

		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
		  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
		  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
		</ul>

		<div class="tab-content">
		  <div id="home" class="tab-pane fade in active">
		    <h3>HOME</h3>
		    <p>Some content.</p>
		  </div>
		  <div id="menu1" class="tab-pane fade">
		    <h3>Menu 1</h3>
		    <p>Some content in menu 1.</p>
		  </div>
		  <div id="menu2" class="tab-pane fade">
		    <h3>Menu 2</h3>
		    <p>Some content in menu 2.</p>
		  </div>
		</div>
	
{{-- 
		@foreach($raffles as $raffle)
			<h1>{{$raffle->title}}</h1>
			<a href="{{action('rafflesController@upvote',$raffle->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
            <a href="{{action('rafflesController@downvote',$raffle->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
			<p>{{$raffle->content}}</p>
			<p>By {{$raffle->user->name}}</p>
			<a href="{{ action('rafflesController@show', $raffle->id) }}">See More</a>
		@endforeach
		<br>

	
		{!! $raffles->appends(Request::except('page'))->render() !!} --}}

	</main>

@stop