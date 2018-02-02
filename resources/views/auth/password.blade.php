@extends('layouts.master')

@section('title') 

<title>Password Reset</title>

@stop



@section('content')
<div class="container">
    <h1 class="text-center">Password Reset</h1>
    <form method="POST" action="/password/email">
        {!! csrf_field() !!}

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
        <div style="display: flex;justify-content: center;">
            <button class="cleargreenBtn btn btn-success" type="submit">
                Send Link
            </button>
        </div>
        </div>
    </form>
</div>
@stop