@extends('layouts.master')

@section('title')

<title>Creat a Lottery</title>

@stop

@section('divHead')

<span>Create a Lottery</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;"><br>
		<form method="POST" action="{{ action('LotteriesController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title"><br>

			{!! $errors->first('init_value', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="init_value" id="init_value" value="{{ old('init_value') }}" placeholder="init_value"><br>

			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="date" name="end_date" id="end_date" value="{{ old('end_date') }}"><br>

			<input class="form-control" type="time" name="end_time" id="end_time" value="{{ old('end_time') }}"><br>

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}

			
			<textarea class="form-control" type="text" name="content" id="content" placeholder="content">{{ old('content') }}</textarea><br>


			<button class="btn btn-success">Submit</button>
		</form>
		<div class="well">
		  <div id="datetimepicker1" class="input-append date">
		    <input data-format="dd/MM/yyyy hh:mm:ss" type="text"></input>
		    <span class="add-on">
		      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		      </i>
		    </span>
		  </div>
		</div>

	</main>

@stop