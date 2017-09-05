@extends('layouts.master')

@section('title')

<title>User</title>

@stop

@section('divHead')

<span>User profile </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">

		<div>Name: {{Auth::user()->name}}</div>
		<div>Email: {{Auth::user()->email}}</div>
		<div>User Name: {{Auth::user()->username}}</div>
		<div>Member since: {{Auth::user()->created_at}}</div>
		


		<a href="{{action('Auth\AuthController@getLogout')}}">Logout</a>

	</main>

@stop