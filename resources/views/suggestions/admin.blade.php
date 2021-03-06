
@extends('layouts.master')

@section('title')

<title>Suggestions</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
@stop

@section('divHead')

<span>Manage Suggestions </span>
<span style="float:right;padding-right:1em;">{!! $suggestions->appends(Request::except('page'))->render() !!}</span>

@stop

@section('content')

	<main class="container adminTables" style="max-width:100%;">

		<table class="table table-condensed" style="width:100%">
			<tr>
				<th>Edit</th>
				<th>Title</th>
				{{-- <th>Content</th> --}}
				<th>User Name</th>
				<th>Votes</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Addressed</th>
				<th>Address</th>
			</tr>
	@foreach($suggestions as $suggestion)
			<tr>
				
				<td>

					<a class="btn btn-warning clearorangeBtn" href="{{action('SuggestionsController@show',$suggestion->id)}}">EDIT</a>

				</td>
				<td>{{$suggestion->title}}</td>
				{{-- <td>{{$suggestion->content}}</td> --}}
				<td>{{$suggestion->user->name}}</td>
				<td>{!!
                  \App\Models\Vote::where('suggestion_id',$suggestion->id)->where('vote',1)->get()->count() -
                  \App\Models\Vote::where('suggestion_id',$suggestion->id)->where('vote',-1)->get()->count()
                 !!}</td>
				<td>{{$suggestion->created_at}}</td>
				<td>{{$suggestion->updated_at}}</td>
				@if($suggestion->addressed)
				<td>Y</td>
				@else
				<td>N</td>
				@endif
				<td>
					<a class="btn btn-block btn-danger" href="{{action('SuggestionsController@closeAddress',$suggestion->id)}}" >Close</a>
					<a class="btn btn-block btn-success" href="{{action('SuggestionsController@openAddress',$suggestion->id)}}">Reopen</a>
				</td>
			</tr>
	@endforeach
		</table>
		<span style="float:right;padding-right:1em;">{!! $suggestions->appends(Request::except('page'))->render() !!}</span>

	</main>

@stop
