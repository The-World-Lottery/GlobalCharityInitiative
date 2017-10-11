@extends('layouts.master')

@section('title')

<title>Edit Raffle</title>

@stop

@section('divHead')

<span>Edit Raffle #{!! $raffle->id !!} </span>

@stop

@section('content')
{{-- {{\App\Models\LotteryEntry::pickWinner(1)}} --}}
	<main class="container" style="max-width:100%;">
		<form method="POST" action="{{ action('RafflesController@update', $raffle->id)}}">
			{!! csrf_field() !!}
			{{ method_field('PUT') }}

<br>
			{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
			
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
				<div class="row">	
					<div class="col-xs-4">
					 	<strong>Title</strong>
					</div>					
					<div class="col-xs-4">
						{{$raffle->title}}
					</div>
					<div class="col-xs-4">
						<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseOne">
				<div class="panel-body">
					<input class="form-control text-center" type="text" name="title" id="title" value="{{$raffle->title}}" placeholder="{{$raffle->title}}">
				</div>
			</div>
			
<br>
			{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>Content</strong>
					</div>
					<div class="col-xs-4">
					 	{{$raffle->content}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseTwo">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="content" id="content" placeholder="content">{{$raffle->content}}</textarea>
				</div>
			</div>
<br>
			{!! $errors->first('product', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>product</strong>
					</div>
					<div class="col-xs-4">
					 	{{-- {{$raffle->product}} --}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapseThree">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="product" id="product" placeholder="product">{{$raffle->product}}</textarea>
				</div>
			</div>
<br>
			{!! $errors->first('end_date', '<span class="help-block">:message</span>')!!}
			<a class="btn btn-default active btn-block" data-toggle="collapse" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour" >
				<div class="row">
					 <div class="col-xs-4">
					 	<strong>end_date</strong>
					</div>
					<div class="col-xs-4">
					 	{{$raffle->end_date}}
					</div>
					<div class="col-xs-4">
					 	<span class="glyphicon glyphicon-pencil">Edit</span>
					</div>
				</div>
			</a>
			<div class="collapse" id="collapsefour">
				<div class="panel-body">
					<textarea class="form-control text-left" type="text" name="end_date" id="end_date" placeholder="end_date">{{$raffle->end_date}}</textarea>
				</div>
			</div>

        <br>
			<button class="btn btn-success">Submit</button>
		</form>
		<br>
		@if((\App\Models\RaffleEntry::filterEntrants($raffle->id)))
		<form method="POST" action="{{ action('RafflesController@destroy', $raffle->id )}}">
		{!! csrf_field() !!}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger">DELETE RAFFLE</button>
		</form>
		@endif

@stop