@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
  <li><a data-toggle="tab" href="#menu1">Register</a></li>
</ul>
@stop

@section('content')

 	<main class="container">
    <div style="padding:1em;">
    <div class="tab-content">
      <div id="home" class="tab-pane fade in active">
      
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

            <div>
                Email
                <input type="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                Password
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="checkbox" name="remember"> Remember Me
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
            </div>
        </form>
            <div id="menu1" class="tab-pane fade">
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
      </div>
    </main>

@stop