@extends('layouts.master')

@section('title')

<title>Reset Password</title>

@stop


@section('content')
<div class="container">
        <h1 class="text-center">Password Reset</h1>
        <form method="POST" action="/password/reset">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">

            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <div class="form-group col col-sm-6 col-sm-offset-3">
                <label>Email</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
            </div>

            <div class="form-group col col-sm-6 col-sm-offset-3">
                <label>Email</label>    
                <input class="form-control" type="password" name="password">
            </div>

            <div class="form-group col col-sm-6 col-sm-offset-3">
                <label>Confirm Password</label>
                <input class="form-control" type="password" name="password_confirmation">
            </div>

            <div class="form-group col col-sm-6 col-sm-offset-3" style="display: flex;justify-content: center;">
                <button class="btn cleargreenBtn btn-success" type="submit">
                    Reset Password
                </button>
            </div>
        </form>
</div>
@stop