
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

<span>Manage Raffles </span>

@stop

@section('content')

	<main class="container adminTables" style="max-width:100%;float:left;">

	<span><a class="btn btn-block btn-success" href="{{action('RafflesController@create')}}" >Create New Raffle</a></span>
	<span style="float:right;padding-right:1em;">{!! $raffles->appends(Request::except('page'))->render() !!}</span>
		<table class="table table-condensed" style="width:90%">
			<tr>
				<th>Edit</th>
				<th>ID</th>
				<th>Description</th>
				{{-- <th>Product</th> --}}
				<th>Created By</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>End Date</th>
				<th>In Progress?</th>
			</tr>
	@foreach($raffles as $raffle)
			<tr>
				
				<td>
					<a class="btn btn-success" href="{{action('RafflesController@edit',$raffle->id)}}">Edit</a>
				</td>
				<td>{{$raffle->id}}</td>
				<td>{{$raffle->content}}</td>
				{{-- <td>{{$raffle->product}}</td> --}}
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
		<span style="float:right;padding-right:1em;">{!! $raffles->appends(Request::except('page'))->render() !!}</span>

	</main>

@stop