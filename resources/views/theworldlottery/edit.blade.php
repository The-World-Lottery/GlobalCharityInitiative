@extends('layouts.master')

@section('title')

<title>Edit Lottery</title>

@stop

@section('divHead')

<span>Edit Lottery #{!! $lottery->id !!} </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<form method="POST" action="{{ action('LotteriesController@update', $lottery->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}


			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
				<div class="row">	
					<div class="col-xs-4">
					 	<strong>Title</strong>
					</div>					
					<div class="col-xs-4">
						{{$lottery->title}}
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseOne">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="title" id="title" value="{{$lottery->title}}" placeholder="{{$lottery->title}}">
				</div>
			</div>
			

			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>Content</strong>
					</div>
					<div class="col-xs-4">
					 	{{$lottery->content}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseTwo">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="content" id="content" placeholder="content">{{$lottery->content}}</textarea>
				</div>
			</div>

{{-- 			{!! $errors->first('init_value', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>init_value</strong>
					</div>
					<div class="col-xs-4">
					 	{{$lottery->init_value}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseThree">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="init_value" id="init_value" placeholder="init_value">{{$lottery->init_value}}</textarea>
				</div>
			</div> --}}
			@if((\App\Models\LotteryEntry::filterEntrants($lottery->id)) || Auth::user()->is_super_admin)
			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>end_date</strong>
					</div>
					<div class="col-xs-4">
					 	{{$lottery->end_date}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapsefour">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="end_date" id="end_date" placeholder="end_date">{{$lottery->end_date}}</textarea>
				</div>
			</div>
			@endif
        


			<button>Submit</button>
		</form>
		@if((\App\Models\LotteryEntry::filterEntrants($lottery->id)))
		<form method="POST" action="{{ action('LotteriesController@destroy', $lottery->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger">DELETE LOTTERY</button>
		</form>
		@endif
@stop