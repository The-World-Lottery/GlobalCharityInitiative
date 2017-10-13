@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a id="zeroO" href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
  <li><a id="zeroO" href="{{action('Auth\AuthController@getRegister')}}">Register</a></li>
</ul>
@stop

@section('content')

 	<main class="container" style="max-width:100%;">
    <div>
        @if (session()->has('errorMessage'))
            <div class="alert alert-error">{{ session('errorMessage') }}</div>
        @endif

        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}
            <div style="margin-top:2em;" class="row">
                <div class="form-group col col-sm-6 col-sm-offset-3 col-xs-12">
                    <label><h2>Email</h2></label>
                    {!! $errors->first('email', '<span class="help-block">:message</span>')!!}
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="row">
                <div class="form-group col col-sm-6 col-sm-offset-3 col-xs-12">
                    <label><h2>Password</h2></label>
                    {!! $errors->first('password', '<span class="help-block">:message</span>')!!}
                    <input class="form-control" type="password" name="password" id="password">
                </div>
            </div>
            <div class=" col-sm-offset-5 form-group">
                <input type="checkbox" name="remember"> Remember Me
            </div>
            <div class="form-group" style="display:flex;justify-content: center;">
                <button style="margin-bottom:2em;width:5em;height:3em;" class="btn btn-success" type="submit">Login</button>
            </div>
            
        </form>
         </div>   
    </main>

@stop