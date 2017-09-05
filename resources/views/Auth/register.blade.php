@extends('layouts.master')

@section('title')

<title>Register</title>

@stop

@section('content')

 	<main class="container">
 	<h1>Register</h1>
        <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div>
        Name
        <input type="text" name="name" value="{{ old('name') }}">
    </div>


    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>
    <div>
        Username
        <input type="text" name="username" value="{{ old('username') }}">
    </div>
    <div>
        Phone Number
        <input type="text" name="phone_number" value="{{ old('phone_number') }}">
    </div>
    <div>
        Profile Image
        <input type="text" name="image" value="{{ old('image') }}">
    </div>

    <div>
        Password
        <input type="password" name="password">
    </div>

    <div>
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div>
        <button type="submit">Register</button>
        <a href="{{action('Auth\AuthController@getLogin')}}">Login</a>
    </div>
</form>
    </main>

@stop