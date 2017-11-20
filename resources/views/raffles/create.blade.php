
@if(Auth::user()->is_admin)
@extends('layouts.master')

@section('title')

<title>Create a raffle</title>

@stop

@section('divHead')

<span>Create Raffle</span>

@stop

@section('content')
	
	<main class="container" style="max-width:100%;"><br>
		<form method="POST" action="{{ action('RafflesController@store') }}">
			{!! csrf_field() !!}

			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

			<div class="form-group">
    			<label for="title">Title</label>
    			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
    		</div>

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<div class="form-group">
	    		<label for="content">Content</label>
				<input class="form-control" type="text" name="content" id="content" value="{{ old('content') }}" placeholder="content">
			</div>

			{!! $errors->first('product', '<span class="help-block">:message</span>')!!}
			<div class="form-group">
	    		<label for="product">Product</label>
				<input class="form-control" type="text" name="product" id="product" value="{{ old('product') }}" placeholder="product">
			</div>

			{!! $errors->first('end-date', '<span class="help-block">:message</span>')!!}
			<div class="form-group">
    			<label for="end_date">End Date</label>
    			<input class="form-control" type="date" name="end_date" id="end_date" value="{{ old('end_date') }}">			
    		</div>

			<div class="form-group">
    			<label for="end_time">End Time</label>
    			<input class="form-control" type="time" name="end_time" id="end_time" value="{{ old('end_time') }}">			
    		</div>


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