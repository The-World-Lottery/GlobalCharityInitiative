@extends('layouts.master')

@section('title')

<title>The World Lottery</title>

@stop

@section('divHead')
<h1 style="margin-top: 1em;">The Global Charity Drawing
</h1>
<div>$5 USD per entry</div>
@stop

@section('content')
	<div class="container text-center">
		<h4 id="jackpot" style="color:lightgreen;">{{-- <strong >Jackpot - </strong> --}}${{number_format($theWorldLottery->current_value,0,".",",")}}</h4>		
		<h4 style="color:#00ffc4;">{{-- Drawing takes place:<br> --}}
		{{ $theWorldLottery->end_date->diffForHumans() }}</h4>
		@if (session()->has('successMessage'))
	        <div class="alert alert-success text-center">{{ session('successMessage') }}</div>
	    @endif
	    @if (session()->has('errorMessage'))
	        <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
	    @endif
	</div>

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row" id="checkWrapper">
			<form id="thisForm" method="POST" action="/twlCheckout">
			<script
			    src="https://checkout.stripe.com/checkout.js"
			  	class="stripe-button"
				data-key="pk_test_9QXLVB6tbq67JmuGwWGco2uX"
				data-amount="500"
				data-name="WorldLottery"
				data-description="Widget"
				data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
				data-locale="auto"
				data-zip-code="true">
			</script>
				<div style="margin-bottom: 2em;" class="col col-md-9 col-xs-12">
					<h2>Pick any <span class="greenTxt"> 5</span> numbers</h2>
					{!! csrf_field() !!}
					@for($i = 1; $i <= 100; $i++)
						<div style="float:left;position:relative;display:flex;justify-content:center;">
							<span style="position:absolute;top:10%;">{{$i}}</span>
							<input class="numCheckbox" type="checkbox" name="{{$i}}">
						</div>
					@endfor
				</div>
				<div style="margin-bottom: 2em;" class="text-center col col-md-3 col-xs-12">
					<h2>And select your<br><span class="greenTxt">KEY</span> number</h2>
					<select class="selectpicker text-center" name="powerNumber"> 
						@for($i = 1; $i <= 100; $i++)
							<option value="{{$i}}">{{$i}}</option>
						@endfor
					</select>
					<br>
					<h2>Then</h2>
					<button class="btn btn-success cleargreenBtn">Submit Numbers</button><br><br>
					@if ((Auth::check()) && (Auth::user()->is_admin))
						<a href="{{ action('TheWorldLotterysController@edit', $theWorldLottery->id) }}"><button style="margin-bottom: 2em;" class="btn btn-warning">Edit</button></a>
					@endif
				</div>
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="amount" value="500">
			</form>
			
		</div>
		<br>
	</main>
@stop

@section('bottomscript')
	<script type="text/javascript">
			//checkbox controllers for the world lottery numbers selection
		$('input[type=checkbox]').on('change', function (e) {
		    if ($('input[type=checkbox]:checked').length > 5) {
		        $(this).prop('checked', false);
		        alert("allowed only 5");
		    }
		});

		// $('#thisForm').on('click', function(){
		// 	// console.log("stuff");
		// 	if($('#img').val().length > 5){
		// 		var sanitizedSource = $('#img').val().replace(/"/g, "");
		// 		$('#editImg').attr('src', sanitizedSource);
		// 	}
		// });
	</script>
@stop