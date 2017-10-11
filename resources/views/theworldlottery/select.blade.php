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
				<div style="margin-bottom: 2em;" class="col col-sm-9 col-xs-12">
					<h2>Pick 5 numbers!</h2>
					{!! csrf_field() !!}
					@for($i = 1; $i <= 100; $i++)

					<label for="number . {{$i}}">{{$i}}
						<input class="numCheckbox"  type="checkbox" name="{{$i}}">
					</label>
					@endfor
				</div>
				<div style="margin-bottom: 2em;" class="text-center col col-sm-3 col-xs-12">
					<h2>Select a<br>POWER NUMBER!!!</h2>
					<select name="powerNumber"> 
						@for($i = 1; $i <= 100; $i++)
							<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select><br><br>
					<button class="btn btn-success">Submit Numbers</button>
				</div>
			</form>
		</div>

	</main>

@stop