@extends('layouts.master')

@section('title')

<title>Edit User</title>

@stop

@section('divHead')

<span>Edit your User</span>

@stop

@section('content')

	<main class="container">
		<h1>Edit User</h1>
		<form method="POST" action="{{ action('UsersController@update', $User->id )}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			<input type="text" name="title" id="title" value="{{ old('title') }}" placeholder="title">
			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<input type="text" name="content" id="content" value="{{ old('content') }}" placeholder="content">
			{!! $errors->first('url', '<span class="help-block">:message</span>')!!}
			<input type="text" name="url" id="url" value="{{ old('url') }}" placeholder="url">
			<button>Submit</button>
		</form>

		<form method="POST" action="{{ action('UsersController@destroy', $User->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-warning">DELETE</button>
		</form>

	</main>

@stop