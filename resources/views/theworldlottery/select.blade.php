@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<span>The World Lottery </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;display:flex;justify-content: center;">
		<div id="checkWrapper">
			
			<form action="{{action('TheWorldLotterysController@selectNumbers')}}">
			@for($i = 1; $i < 100; $i++)

			<label for="number . {{$i}}">{{$i}}
				<input class="numCheckbox"  type="checkbox" name="number . {{$i}}">
			</label>

			@endfor
			</form>
		</div>

	</main>

@stop