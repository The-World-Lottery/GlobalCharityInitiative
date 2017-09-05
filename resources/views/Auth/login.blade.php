@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')

<span>Login</span>

@stop

@section('content')

 	<main class="container">
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
                <a href="{{action('Auth\AuthController@getRegister')}}">signup</a>
            </div>
        </form>
    </main>

@stop