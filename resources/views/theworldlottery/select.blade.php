@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')

<span>The World Lottery </span>

@stop

@section('content')

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row" id="checkWrapper">
			<form method="GET" action="{{action('TheWorldLotterysController@storeNumbers')}}">
				<div style="margin-bottom: 2em;" class="col col-md-9 col-xs-12">
					<h2>Pick 5 numbers!</h2>
					{!! csrf_field() !!}
					@for($i = 1; $i <= 100; $i++)

				
						<div style="float:left;position:relative;display:flex;justify-content:center;">
							<span style="position:absolute;top:10%;">{{$i}}</span>
							<input class="numCheckbox" type="checkbox" name="{{$i}}">
						</div>
				
					@endfor
				</div>
				<div style="margin-bottom: 2em;" class="text-center col col-md-3 col-xs-12">
					<h2>Select a<br>POWER NUMBER!!!</h2>
					<select class="selectpicker text-center" name="powerNumber"> 
						@for($i = 1; $i <= 100; $i++)
							<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
					<br>
					<br>
					<button class="btn btn-success">Submit Numbers</button>
				</div>
			</form>
		</div>

	</main>

@stop