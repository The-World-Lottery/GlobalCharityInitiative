@extends('layouts.master')

@section('title')

<title>Edit User</title>

@stop

@section('divHead')

<span>Edit Information</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;">
		<h1>Edit User</h1>
		<form method="POST" action="{{ action('UsersController@update', $User->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}
			{!! $errors->first('name', '<span class="help-block">:message</span>')!!}
			
			<br>
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
				<div class="row">	
					<div class="col-xs-4">
					 	<strong style="color:green;">Name</strong>
					</div>					
					<div class="col-xs-4">
						{{$User->name}}
					</div>
					<div class="col-xs-4">
						<span class=" orange glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseOne">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="name" id="name" value="{{$User->name}}" placeholder="{{$User->name}}">
				</div>
			</div>
			

			{!! $errors->first('username', '<span class="help-block">:message</span>')!!}
			<br>
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong style="color:green;">User Name</strong>
					</div>
					<div class="col-xs-4">
					 	{{$User->username}}
					</div>
					<div class="col-xs-4">
					 	<span class=" orange glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseTwo">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="username" id="username" value="{{$User->username}}" placeho
					lder="username">
				</div>
			</div>

			{!! $errors->first('email', '<span class="help-block">:message</span>')!!}
			<br>
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong style="color:green;">Email</strong>
					</div>
					<div class="col-xs-4">
					 	{{$User->email}}
					</div>
					<div class="col-xs-4">
					 	<span class=" orange glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseThree">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="email" id="email" value="{{$User->email}}" placeholder="email">
				</div>
			</div>




			{!! $errors->first('image', '<span class="help-block">:message</span>')!!}
			
			<br>
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong style="color:green;">Profile Image</strong>
					</div>
					<div class="col-xs-4">
					 
					</div>
					<div class="col-xs-4">
					 	<span class=" orange glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseFour">
				<div class="panel-body">
					<img src='{{substr($User->image,1,-1)}}' id="editImg">
					<img src='{{$User->image}}' id="editImg">
					<input id="img" type="text" name="image" value="{{$User->image}}">
        			<a id="filestackButton" class="btn btn-secondary">Filestack Image Hosting</a>
				</div>
			</div>
			
        
			{!! $errors->first('phone_number', '<span class="help-block">:message</span>')!!}
			<br>
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong style="color:green;">Phone Number</strong>
					</div>
					<div class="col-xs-4">
					 	{{$User->phone_number}}
					</div>
					<div class="col-xs-4">
					 	<span class=" orange glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseFive">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="phone_number" id="phone_number" value="{{$User->phone_number}}" placeholder="phone_number">
				</div>
			</div>


{{-- 		PLACEHOLDER FOR UPDATING PASSWORD

			{!! $errors->first('password', '<span class="help-block">:message</span>')!!}
			<input type="text" name="password" id="password" value="{{ old('password') }}" placeholder="password"> --}}

			<br>

			<button class="btn cleargreenBtn btn-success">Save Changes</button>
		</form>
		<br>

		<form method="POST" action="{{ action('UsersController@destroy', $User->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-warning">DELETE ACCOUNT</button>
		</form>

	</main>

@stop