@extends('layouts.master')

@section('title')

<title>Single lottery</title>

@stop

@section('divHead')

<span>Show Lottery #{!! $lottery->id !!} </span>

@stop

@section('content')

	<main class="container">
		<h1>This lottery</h1>

		<h2>{{$lottery['title']}}</h2>
		<a href="{{action('LotterysController@upvote',$lottery->id)}}"><span class="glyphicon glyphicon-thumbs-up"></span></a>
        <a href="{{action('LotterysController@downvote',$lottery->id)}}"><span class="glyphicon glyphicon-thumbs-down"></span></a>
		<h3>{{$lottery['content']}}</h3>
		<p>By {{$lottery->user->name}}</p>
		<p>posted on {{$lottery->created_at}}</p>
		<p>Last updated on {{$lottery->updated_at}}</p>
		@if (Auth::id() == $lottery->user_id)
		<a href="{{ action('LotterysController@edit', $lottery->id) }}">Edit</a>
		@endif
		
	</main>

@stop