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
			<div id="showProfImg"><img src='{{substr($user->image,1,-1)}}' id="profImg"></div>
			<div><strong>Name:</strong> {{$user->name}}</div>
			<div><strong>Email:</strong> {{$user->email}}</div>
			<div><strong>User Name:</strong> {{$user->username}}</div>
			<div><strong>Member since:</strong> {{$user->created_at}}</div>
			
			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-primary">Edit</button></a>
			@endif
		</div>

	</main>

@stop