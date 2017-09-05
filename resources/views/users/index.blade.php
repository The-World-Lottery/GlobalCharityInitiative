@if (true) <!-- replace <- Auth::user()->is_admin -->
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

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">

		<table style="width:100%">
	@foreach($users as $user)
			<tr>
			
				<td><a href="{{action('UsersController@edit',$user['id'])}}" >{{$user['name']}}</a></td>
			
				<td>{{$user['username']}}</td>
				<td>{{$user['email']}}</td>
				<td>{{$user['id']}}</td>
			</tr>
	@endforeach
		</table>

	</main>

@stop
@else
{{action('LotterysController@index')}}
@endif