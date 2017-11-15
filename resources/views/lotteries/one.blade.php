@extends('splash')

@section('lottery1')

	@for($lottery)

		<h2>
			{{$lottery->title}}
		</h2>
		<p style="background-color:rgba(0,0,0,.5);padding:.5em 0 .5em 0;">
			Current Estimated Value 
			<br><strong style="font-size:2.5em;color:lightgreen">${{number_format(($lottery->current_value),2,".",",")}}</strong>
			<br>Lottery Ends : <strong style="color:#00ffc4;margin-bottom: .5em;">{{$lottery->end_date->diffForHumans()}}</strong>
		</p>

	@endfor

@stop