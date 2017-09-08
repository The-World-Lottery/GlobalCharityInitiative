@extends('layouts.master')

@section('title')

<title>Login</title>

@stop

@section('divHead')
<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a href="{{action('Auth\AuthController@getLogin')}}">Login</a></li>
  <li><a href="{{action('Auth\AuthController@getRegister')}}">Register</a></li>
</ul>
@stop

@section('content')

 	<main class="container">
    <div style="padding:1em;">
        @if (session()->has('errorMessage'))
            <div class="alert alert-error">{{ session('errorMessage') }}</div>
        @endif

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
            
        </form>
         </div>   
    </main>

@stop