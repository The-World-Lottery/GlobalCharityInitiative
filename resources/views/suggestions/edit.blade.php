@extends('layouts.master')

@section('title')

<title>Edit Suggestion</title>

@stop

@section('divHead')

<span>Edit your suggestion</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;">
		<h1>Edit Suggestion</h1>
		<form method="POST" action="{{ action('SuggestionsController@update', $suggestion->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}


			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
				<div class="row">	
					<div class="col-xs-4">
					 	<strong>Title</strong>
					</div>					
					<div class="col-xs-4">
						{{$suggestion->title}}
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseOne">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="title" id="title" value="{{$suggestion->title}}" placeholder="{{$suggestion->title}}">
				</div>
			</div>
			

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>Content</strong>
					</div>
					<div class="col-xs-4">
					 	{{$suggestion->content}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseTwo">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="content" id="content" placeholder="content">{{$suggestion->content}}</textarea>
				</div>
			</div>


			<button>Submit</button>
		</form>

		<form method="POST" action="{{ action('SuggestionsController@destroy', $suggestion->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger">DELETE SUGGESTION</button>
		</form>

@stop