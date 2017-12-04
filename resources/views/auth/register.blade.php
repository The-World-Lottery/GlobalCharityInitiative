@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')
@stop

@section('content')
{{-- <ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li ><a id="zeroO" href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
  <li class="active"><a  id="zeroO"  href="{{action('Auth\AuthController@getRegister')}}">Register</a></li>
</ul> --}}


 <main class="container authSpacer" style="max-width:100%;padding-top:2em;">
    <h1>Sign In</h1>
    <div class="row">
        <form method="POST" action="/auth/register">
        <div class="col col-xs-12 col-sm-5 col-sm-offset-1">
        {!! csrf_field() !!}

            <div class="form-group">
                {!! $errors->first('name', '<span style="color:yellow;" class="help-block">:message</span>')!!}
                <label for="Input1">Your Name</label>
                <input class="form-control" autofocus type="text" name="name" id="Input1" value="{{old('name')}}">
            </div>


            <div class="form-group">
                {!! $errors->first('email', '<span class="help-block">:message</span>')!!}
                <label for="Input2">Email</label>
                <input class="form-control" type="email" name="email" id="Input2" value="{{old('email')}}">
            </div>

            <div class="form-group">
                {!! $errors->first('username', '<span class="help-block">:message</span>')!!}
                <label for="Input3">Username</label>
                <input class="form-control" type="text" name="username" id="Input3" value="{{old('username')}}">
            </div>
            <div class="form-group" hidden>
                <label for="Input5">Profile Image</label>
                <input class="form-control" id="img" type="text" name="image" id="Input5" value="{{old('image')}}"><br>
            </div>
                <a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
        </div>
        <div class="col col-xs-12 col-sm-5">

            <div class="form-group">
                {!! $errors->first('phone_number', '<span class="help-block">:message</span>')!!}
                <label for="Input4">Phone Number</label>
                <input class="form-control" type="text" name="phone_number" id="Input4" value="{{old('phone_number')}}">
            </div>


            <div class="form-group">
                {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                <label for="Input6">Password</label>
                <input class="form-control" type="password" name="password" id="Input6" value="{{old('password')}}">
            </div>

            <div class="form-group">
                {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                <label for="formGroupExampleInput7">Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation" id="formGroupExampleInput7" value="">
            </div>

            <div class="form-group" style="margin-bottom:3em;display:flex;justify-content: center;">
                <button type="submit" class="btn btn-success">Register Your Account</button>
            </div>
        </div>
        </form>
    </div>
</main>

@stop