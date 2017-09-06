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
			<div id="showProfImg"><img src='{{substr(Auth::user()->image,1,-1)}}' id="profImg"></div>
			<div><strong>Name:</strong> {{Auth::user()->name}}</div>
			<div><strong>Email:</strong> {{Auth::user()->email}}</div>
			<div><strong>User Name:</strong> {{Auth::user()->username}}</div>
			<div><strong>Member since:</strong> {{Auth::user()->created_at}}</div>

			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
		</div>

	</main>

@stop