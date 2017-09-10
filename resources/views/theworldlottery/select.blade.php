@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<span>The World Lottery </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div style="padding-top: 2em;">
			
			@for($i = 1; $i < 100; $i++)

			
			<form action="{{action('TheWorldLotterysController@selectNumbers')}}">
				
			<input  type="checkbox" name="number . {{$i}}">{{$i}}
			
			</form>

			@endfor
		</div>

	</main>

@stop