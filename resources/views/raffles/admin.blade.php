
@extends('layouts.master')

@section('title')

<title>Raffles</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
@stop

@section('divHead')

<h1>Manage Raffles </h1 style="margin-top:1em;">

@stop

@section('content')

	<main class="container adminTables" style="max-width:100%;">
	<div style="display: flex;justify-content: center;">
		<a class="btn btn-success cleargreenBtn" href="{{action('RafflesController@create')}}" >Create New Raffle</a>
	</div>
	<br>
	<div>{!! $raffles->appends(Request::except('page'))->render() !!}</div>
	<div>
		<table class="table" style="width:90%">
			<tr>
				<th>Edit</th>
				<th>ID</th>
				<th>Description</th>
				<th>Product</th>
				<th>Created By</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>End Date</th>
				<th>In Progress?</th>
			</tr>
		@foreach($raffles as $raffle)
			<tr>
				
				<td>
					<a class="btn btn-warning" href="{{action('RafflesController@edit',$raffle->id)}}">EDIT</a>
				</td>
				<td>{{$raffle->id}}</td>
				<td>{{$raffle->content}}</td>
				<td style="width:50em;overflow:hidden;">{{$raffle->product}}</td>
				<td>{{$raffle->user->name}}</td>
				<td>{{$raffle->created_at->diffForHumans()}}</td>
				<td>{{$raffle->updated_at->diffForHumans()}}</td>
				<td>{{$raffle->end_date}}</td>
				@if($raffle->end_date > \Carbon\Carbon::now()->toDateTimeString())
				<td>Y</td>
				@else
				<td>N</td>
				@endif
			</tr>
		@endforeach
		</table>
	</div>

	</main>

@stop