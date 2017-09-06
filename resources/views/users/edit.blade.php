@extends('layouts.master')

@section('title')

<title>Edit User</title>

@stop

@section('divHead')

<span>Edit your User</span>

@stop

@section('content')

	<main class="container">
		<h1>Edit User</h1>
		<form method="POST" action="{{ action('UsersController@update', $User->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}


			{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
			<input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="name">


			{!! $errors->first('username', '<span class="help-block">:message</span>')!!}
			<input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="username">

			{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
			<input type="text" name="email" id="email" value="{{ old('email') }}" placeholder="email">



{{-- 		PLACEHOLDER FOR UPDATING IMAGE

			{!! $errors->first('image', '<span class="help-block">:message</span>')!!}
			<input type="text" name="image" id="image" value="{{ old('image') }}" placeholder="image"> --}}

			{!! $errors->first('phone_number', '<span class="help-block">:message</span>')!!}
			<input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" placeholder="phone_number">


{{-- 		PLACEHOLDER FOR UPDATING PASSWORD

			{!! $errors->first('password', '<span class="help-block">:message</span>')!!}
			<input type="text" name="password" id="password" value="{{ old('password') }}" placeholder="password"> --}}



			<button>Submit</button>
		</form>


		{{-- <form method="POST" action="{{ action('UsersController@destroy', $User->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-warning">DELETE ACCOUNT</button>
		</form> --}}

	</main>

@stop