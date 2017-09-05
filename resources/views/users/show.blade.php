@extends('layouts.master')

@section('title')

<title>User</title>

@stop

@section('divHead')

<span>User profile </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">

		
		<a href="{{action('Auth\AuthController@getLogout')}}">Logout</a>

	</main>

@stop