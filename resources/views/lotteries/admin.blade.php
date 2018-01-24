
@extends('layouts.master')

@section('title')

<title>Lotteries</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
@stop

@section('divHead')

<span>Manage Lotteries </span>

@stop

@section('content')


	<main class="container" style="max-width:100%;">
	<div style="display: flex;justify-content: center;">
		<a class="btn btn-success cleargreenBtn" href="{{action('LotteriesController@create')}}" >Create New Lottery</a>
	</div>
	<br>
	{{-- <div>{!! $lotteries->appends(Request::except('page'))->render() !!}</div> --}}

		<table class="table table-condensed">
			<tr>
				<th>Edit</th>
				<th>ID</th>
				{{-- <th>Description</th> --}}
				<th>Starting Pot</th>
				<th>Current Pot</th>
				<th>Created By</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>End Date</th>
				<th>In Progress?</th>
			</tr>
	@foreach($lotteries as $lottery)
			<tr>
				
				<td>
					<a class="btn btn-warning" href="{{action('LotteriesController@edit',$lottery->id)}}">Edit</a>
				</td>
				<td>{{$lottery->id}}</td>
				{{-- <td>{{$lottery->content}}</td> --}}
				<td>{{$lottery->init_value}}</td>
				<td>{{$lottery->current_value}}</td>
				<td>{{$lottery->user->name}}</td>
				<td>{{$lottery->created_at->diffForHumans()}}</td>
				<td>{{$lottery->updated_at->diffForHumans()}}</td>
				<td>{{$lottery->end_date->diffForHumans()}}</td>
				@if($lottery->end_date > \Carbon\Carbon::now()->toDateTimeString())
				<td>Y</td>
				@else
				<td>N</td>
				@endif
			</tr>
	@endforeach
		</table>
		<span style="float:right;padding-right:1em;">{!! $lotteries->appends(Request::except('page'))->render() !!}</span>

	</main>

@stop