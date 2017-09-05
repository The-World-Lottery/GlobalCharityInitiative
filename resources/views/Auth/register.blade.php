@extends('layouts.master')

@section('title')

<title>Register</title>

@stop

@section('divHead')

<span>Sign up for an account</span>

@stop

@section('content')

 	<main class="container">
        <form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        Name
        <input type="text" name="name">
    </div>


    <div class="form-group">
        Email
        <input type="email" name="email">
    </div>

    <div class="form-group">
        Username
        <input type="text" name="username">
    </div>

    <div class="form-group">
        Phone Number
        <input type="text" name="phone_number"">
    </div>

    <div class="form-group">
        Profile Image
        <input id="img" type="text" name="image"><br>
        <a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password">
    </div>

    <div class="form-group">
        Confirm Password
        <input type="password" name="password_confirmation">
    </div>

    <div class="form-group">
        <button type="submit">Register</button>
    </div>

</form>
    </main>

@stop