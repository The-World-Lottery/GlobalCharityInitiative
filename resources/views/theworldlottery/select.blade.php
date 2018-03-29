@extends('layouts.master')

@section('title')

<title>Global Charity</title>

@stop

@section('divHead')
<br>
<h2 id="hoverTrigger">
	Global Charity Drawing
	<div style="font-size:50%;margin-bottom: 0em;">Requires $5 donation to participate.</div>
</h2>
@stop

@section('content')
	<div class="container text-center">
		<h4 id="jackpot" style="margin-top:-.4em;color:lightgreen;">
			${{number_format($theWorldLottery->current_value,0,".",",")}}</h4>		
		<h4 style="color:#00ffc4;">{{-- Drawing takes place:<br> --}}
		@if(\App\Models\TheWorldLottery::orderBy('id','desc')->limit(1)->get()[0]['end_date'] <= date('Y-m-d H:i:s'))
			<h1>Drawing in Progress</h1>
		@else
			{{ $theWorldLottery->end_date->diffForHumans() }}</h4>
		@endif
		@if (session()->has('successMessage'))
	        <div class="alert alert-success text-center">{{ session('successMessage') }}</div>
	    @endif
	    @if (session()->has('errorMessage'))
	        <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
	    @endif
	</div>

	<main class="container" style="max-width:100%;display:flex;justify-content: center;">
		<div class="row" id="checkWrapper">
			<form id="thisForm" method="POST" action="/gcdCheckout">
				<div style="margin-bottom: 2em;" class="col col-md-8 col-xs-12">
					<h2>Pick <span class="greenTxt">ANY 5</span> numbers (1 - 100) and then...</h2>
					{!! csrf_field() !!}
					@for($i = 1; $i <= 100; $i++)
						<div style="float:left;position:relative;display:flex;justify-content:center;">
							<span style="position:absolute;top:10%;">{{$i}}</span>
							<input class="numCheckbox" type="checkbox" name="{{$i}}">
						</div>
					@endfor
				</div>
				<div style="margin-bottom: 2em;" class="text-center col col-md-4 col-xs-12">
					<h2>Select a <span class="greenTxt">KEY</span> number</h2>
					<select class="selectpicker text-center" name="powerNumber" style="z-index: 10000;"> 
						@for($i = 1; $i <= 50; $i++)
							<option value="{{$i}}" style="display: flex;justify-content: center;">{{$i}}</option>
						@endfor
					</select>
					<br>
					<h2>Then</h2><br>
					<h2 id="sub">SUBMIT YOUR NUMBERS!</h2>
					<button id="sub2" style="display:none;" class="btn btn-success cleargreenBtn">SUBMIT NUMBERS</button><br><br>
					@if ((Auth::check()) && (Auth::user()->is_admin))
						<a href="{{ action('TheWorldLotterysController@edit', $theWorldLottery->id) }}"><button style="margin-bottom: 2em;" class="btn btn-warning">EDIT</button></a>
					@endif
				</div>
			  <input type="hidden" name="_token" value="{{ csrf_token() }}">
			  <input type="hidden" name="amount" value="500">
			<script
			    src="https://checkout.stripe.com/checkout.js"
			  	class="stripe-button"
				data-key="pk_test_9QXLVB6tbq67JmuGwWGco2uX"
				data-amount="500"
				data-name="Global Charity Drawing"
				data-description="One Entry"
				data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
				data-locale="auto"
				data-zip-code="true">
			</script>
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
		        // alert("allowed only 5");
		    }

		    if ($('input[type=checkbox]:checked').length == 5) {
		    	$('#sub').hide();
		    	$('#sub2').show();
		    } else {
		    	$('#sub2').hide();
		    	$('#sub').show();
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