@extends('layouts.master')

@section('title')

<title>Password Reset</title>

@stop



@section('content')


Click here to reset your password: {{ url('password/reset/'.$token) }}

@stop