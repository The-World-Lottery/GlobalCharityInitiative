@extends('layouts.master')

@section('title')

<title>Edit User</title>

@stop

@section('divHead')

<span>Edit Information</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<h1>Edit User</h1>
		<form method="POST" action="{{ action('UsersController@update', $User->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}


			{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
				<p style="text-align: left"> <span style="padding-right:40%"><strong>Name</strong></span>{{$User->name}}<span class="glyphicon glyphicon-pencil" style= "padding-left:40%">Edit</span></p>
			</a>
			<div class="collapse" id="collapseOne">
				<input type="text" name="name" id="name" value="{{$User->name}}" placeholder="{{$User->name}}">
			</div>


			{!! $errors->first('username', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
				<p style="text-align: left"> <span style="padding-right:40%"><strong>User Name</strong></span>{{$User->username}}<span class="glyphicon glyphicon-pencil" style= "padding-left:40%">Edit</span></p>
			</a>
			<div class="collapse" id="collapseTwo">
				<input type="text" name="username" id="username" value="{{$User->username}}" placeholder="username">
			</div>

			{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
				<p style="text-align: left"> <span style="padding-right:40%"><strong>Email</strong></span>{{$User->email}}<span class="glyphicon glyphicon-pencil" style= "padding-left:40%">Edit</span></p>
			</a>
			<div class="collapse" id="collapseThree">
				<input type="text" name="email" id="email" value="{{$User->email}}" placeholder="email">
			</div>



{{-- 		PLACEHOLDER FOR UPDATING IMAGE

			{!! $errors->first('image', '<span class="help-block">:message</span>')!!}
			<input type="text" name="image" id="image" value="{{ old('image') }}" placeholder="image"> --}}

			{!! $errors->first('phone_number', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" >
				<p style="text-align: left"> <span style="padding-right:40%"><strong>Phone Number</strong></span>{{$User->email}}<span class="glyphicon glyphicon-pencil" style= "padding-left:40%">Edit</span></p>
			</a>
			<div class="collapse" id="collapseFour">
				<input type="text" name="phone_number" id="phone_number" value="{{$User->phone_number}}" placeholder="phone_number">
			</div>


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