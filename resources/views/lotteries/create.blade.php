@extends('layouts.master')

@section('title')

<title>Creat a Lottery</title>

@stop

@section('divHead')

<span>Create a Lottery</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;"><br>
	<div class="col col-sm-8 col-sm-offset-2 text-center">
		<form method="POST" action="{{ action('LotteriesController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

			<div class="form-group">
    			<label for="title">Title</label>
    			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}">
    		</div>

			{!! $errors->first('init_value', '<span class="help-block">:message</span>')!!}

			<div class="form-group">
    			<label for="init_value">Initial Value</label>
    			<input class="form-control" type="text" name="init_value" id="init_value" value="{{ old('init_value') }}">
    		</div>

			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}

			<div class="form-group">
    			<label for="eend_date">End Date</label>
    			<input class="form-control" type="date" name="end_date" id="end_date" value="{{ old('end_date') }}">			
    		</div>

			<div class="form-group">
    			<label for="end_time">End Time</label>
    			<input class="form-control" type="time" name="end_time" id="end_time" value="{{ old('end_time') }}">			
    		</div>

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}

			
			<div class="form-group">
    			<label for="content">Content</label>
    			<textarea class="form-control" type="text" name="content" id="content">{{ old('content') }}</textarea>
    		</div>


			<button class="btn btn-success">Submit</button>
		</form>
	</div>
	</main>

@stop