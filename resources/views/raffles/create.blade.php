@if(Auth::user()->is_admin)
@extends('layouts.master')

@section('title')

<title>Create a raffle</title>

@stop

@section('divHead')

<span>Create Raffle</span>

@stop

@section('content')
	
	<main class="container" style="max-width:100%;float:left;"><br>
		<form method="POST" action="{{ action('RafflesController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title"><br>
			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="content" id="content" value="{{ old('content') }}" placeholder="content"><br>
			{!! $errors->first('product', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="text" name="product" id="product" value="{{ old('product') }}" placeholder="product"><br>
			{!! $errors->first('end-date', '<span class="help-block">:message</span>')!!}
			<input class="form-control" type="datetime-local" name="end-date" id="end-date" value="{{ old('end-date') }}" placeholder="end-date"><br>

			<div class="form-group">
		        Raffle Image
		        <input id="img" type="text" name="image"><br>
		        <a id="filestackButton" class="btn btn-secondary">Use Filestack Image Hosting</a>
		    </div>


			<button>Submit</button>
		</form>
	</main>
@stop
@else
{{action('RafflesController@index')}}
@endif