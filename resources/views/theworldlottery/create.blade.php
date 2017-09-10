@extends('layouts.master')

@section('title')

<title>Creat a Lottery</title>

@stop

@section('divHead')

<span>Create a Lottery</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<form method="POST" action="{{ action('LotteriesController@store') }}">
			{!! csrf_field() !!}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title">

			{!! $errors->first('init_value', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="init_value" id="init_value" value="{{ old('init_value') }}" placeholder="init_value">

			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}

			<input class="form-control" type="text" name="end_date" id="end_date" value="{{ old('end_date') }}" placeholder="end_date">

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}

			
			<textarea class="form-control" type="text" name="content" id="content" placeholder="content">{{ old('content') }}</textarea>


			<button class="btn btn-primary">Submit</button>
		</form>
	</main>
@stop