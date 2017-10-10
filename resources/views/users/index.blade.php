
@extends('layouts.master')

@section('title')

<title>User</title>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
@stop

@section('divHead')

<span>User profile </span>
<span style="float:right;padding-right:1em;">{!! $users->appends(Request::except('page'))->render() !!}</span>

@stop

@section('content')

	<main class="container table-responsive adminTables" style="max-width:100%;">

		<table class="table table-condensed">
			<tr>
				<th>Edit</th>
				<th>Name</th>
				<th>UserName</th>
				<th>Email</th>
				<th>User ID</th>
				<th># of Posts</th>
				<th>Admin</th>
				@if(Auth::user()->is_super_admin)
					<th>Change Status</th>
				@endif
			</tr>
	@foreach($users as $user)
			<tr>
				
				<td><a class="btn btn-success btn-xs" href="{{action('UsersController@show',$user->id)}}" >Edit</a></td>
				<td>{{$user->name}}</td>
				<td>{{$user->username}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->id}}</td>
				<td>{{$user->suggestions->count()}}</td>
				@if($user->is_admin)
				<td>Y</td>
				@else
				<td>N</td>
				@endif
				@if(Auth::user()->is_super_admin)
					<td>

						<a class="btn btn-block btn-primary btn-xs" href="{{action('UsersController@makeAdmin',$user->id)}}" >+ Admin Rights</a>

						<a class="btn btn-block btn-danger btn-xs" href="{{action('UsersController@destroyAdmin',$user->id)}}">- Admin Rights</a>
					</td>
				@endif
			</tr>
	@endforeach
		</table>
		<span style="float:right;padding-right:1em;">{!! $users->appends(Request::except('page'))->render() !!}</span>

	</main>

@stop
