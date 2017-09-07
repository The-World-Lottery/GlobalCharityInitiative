@if(Auth::user()->is_admin)
@extends('layouts.master')

@section('title')

<title>Create a raffle</title>

@stop

@section('divHead')

<span>Create Raffle</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<h1>Create a raffle here</h1>
		<form method="POST" action="{{ action('RafflesController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title">
			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="content" id="content" value="{{ old('content') }}" placeholder="content">
			{!! $errors->first('product', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="product" id="product" value="{{ old('product') }}" placeholder="product">
			<p>format MM/DD/YYYY</p>
			{!! $errors->first('end-date', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="datetime" name="end-date" id="end-date" value="{{ old('end-date') }}" placeholder="end-date">
			<button>Submit</button>
		</form>
	</main>
@stop
@else
{{action('RafflesController@index')}}
@endif