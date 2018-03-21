@extends('layouts.master')

@section('title')

<title>Previous Winners</title>

@stop

@section('content')

<div class="container">

	<div class="row text-center">

		<h1>Our Previous Lucky Donors!</h1>
		<br>
		<hr>
		
		@foreach($winners as $winner)

		{{-- {{var_dump($winner)}} --}}
		<h5><span style="color:#0af794;">{{ \App\User::select('username')->where('id',$winner->winner_id)->get()[0]['username'] }}</span>

		</h5> 

		won {{$winner->product}}

		<span style="color:#0af794;">{{$winner->end_date->diffForHumans()}}</span>
		<br>
		<br>


		@endforeach

	</div>

</div>

@stop