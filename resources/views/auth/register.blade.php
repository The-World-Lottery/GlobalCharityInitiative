@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li ><a href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
  <li class="active"><a href="{{action('Auth\AuthController@getRegister')}}">Register</a></li>
</ul>
@stop

@section('content')

 	<main class="container">
  
            <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input type="text" name="name" value="{{old('name')}}">
    </div>


    <div class="form-group">
        Email
        <input type="email" name="email" value="{{old('email')}}">
    </div>

    <div class="form-group">
        Username
        <input type="text" name="username" value="{{old('username')}}">
    </div>

    <div class="form-group">
        Phone Number
        <input type="text" name="phone_number" value="{{old('phone_number')}}">
    </div>

    <div class="form-group">
        Profile Image
        <input id="img" type="text" name="image" value="{{old('image')}}"><br>
        <a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password" value="{{old('password')}}">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" name="password_confirmation" value="">
    </div>

    <div class="form-group">
        <button type="submit">Register</button>
    </div>

</form>
     
    </main>

@stop