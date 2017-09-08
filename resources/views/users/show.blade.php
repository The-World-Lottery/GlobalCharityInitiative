@extends('layouts.master')

@section('title')

<title>User</title>

@stop

@section('divHead')

<span>User profile </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			<div id="showProfImg"><img src='{{substr($user->image,1,-1)}}' id="profImg"></div>
			<div><strong>Name:</strong> {{$user->name}}</div>
			<div><strong>Email:</strong> {{$user->email}}</div>
			<div><strong>User Name:</strong> {{$user->username}}</div>
			<div><strong>Member since:</strong> {{$user->created_at}}</div>
			@if(Auth::id() == $user->id)
			<a href="{{action('Auth\AuthController@getLogout')}}"><button class="btn btn-primary">Logout</button></a>
			@endif
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				<a href="{{action('UsersController@edit' , $user->id)}}"><button class="btn btn-primary">Edit</button></a>
			@endif
			@if(Auth::id() == $user->id || Auth::user()->is_admin) 
				{{-- <form method="POST" action="{{ action('UsersController@destroy', $user->id )}}">
					<button class="btn btn-large btn-primary" data-toggle="confirmation" data-title="Open Google?">Delete Account</button>
					{!! csrf_field() !!}
					{{ method_field('DELETE') }}

				</form> --}}
				<a href="{{ action('UsersController@destroy',$user->id) }}" class="btn btn-danger btn-sm"
                           data-tr="tr_{{$user->id}}"
                           data-toggle="confirmation"
                           data-btn-ok-label="Delete" data-btn-ok-icon="fa fa-remove"
                           data-btn-ok-class="btn btn-sm btn-danger"
                           data-btn-cancel-label="Cancel"
                           data-btn-cancel-icon="fa fa-chevron-circle-left"
                           data-btn-cancel-class="btn btn-sm btn-default"
                           data-title="Are you sure you want to delete ?"
                           data-placement="left" data-singleton="true">
                            Delete
                        </a>
			@endif

			<button class="btn btn-default" data-toggle="confirmation" data-popout="true">Confirmation 1</button>

		</div>
	</main>

@stop