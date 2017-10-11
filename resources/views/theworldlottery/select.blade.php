@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<span>The World Lottery </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div id="checkWrapper">
			<p>Pick 5 numbers!</p>
			<form method="GET" action="{{action('TheWorldLotterysController@storeNumbers')}}">
				{!! csrf_field() !!}
			@for($i = 1; $i <= 100; $i++)

			<label for="number . {{$i}}">{{$i}}
				<input class="numCheckbox"  type="checkbox" name="{{$i}}">
			</label>

			@endfor
			<p>Select your power number!!!</p>

			<select name="powerNumber"> 
				@for($i = 1; $i <= 100; $i++)
					<option value="{{$i}}">{{$i}}</option>
				@endfor
			</select>
			<button class="btn btn-success">Submit Numbers</button>
			
			</form>
		</div>

	</main>

@stop