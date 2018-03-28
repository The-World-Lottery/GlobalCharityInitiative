@extends('layouts.master')

@section('title')

<title>Donations Drawings</title>

@stop

@section('divHead')
	<div id="raffHead" class="container">
	<br>
		<h2>Donation Drawings</h2>

	{{-- <h2 id="hoverTrigger"> --}}
		<div style="margin-bottom: 1em;padding:0 2em 0 2em;">Each donation of 5 dollars gets you one entry in the drawing of your choice. If you hold the only entry or enties when the drawing times out, you have a 100% chance to win that drawing. See a list of our previous winners <a href="/aboutus"><span style="color:#0af794;"><u>HERE</u></span></a>.<br>Thank you for your donation!</div>

	</div>
	{{-- </h2> --}}

@stop

@section('content')

<div class="container-fluid">
	<div style="display:flex;justify-content:center; ">
		{!! $raffles->appends(Request::except('page'))->render() !!}
	</div>
	@if (session()->has('successMessage'))
        <div class="alert alert-success text-center">{{ session('successMessage') }}</div>
    @endif
    @if (session()->has('errorMessage'))
        <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
    @endif

	<div class="row" style="margin-top: 2em;">
		@foreach($raffles as $raffle)
			<div class="col-sm-6 col-md-4 col-lg-3 text-center">
				<div id="raffleHolder">
					<div class="raffleCont" style='background-image:url("{{$raffle->img}}");'>
						<img src="{{$raffle->img}}" style="height:0;width:0;" alt="{{$raffle->product}}">
						<a  id="raffleAnchor" style="" href="{{ action('RafflesController@show', $raffle->id) }}">
							<h3 title="{{$raffle->product}}" style="/*color:#31b7d5;*/background-color: rgba(0,0,0,.5);margin:-.7em 0 0 0;padding:.6em;">{{$raffle->title}}</h3>
						</a>	
					</div>
					<div class="raffleInfo">
						<h3 style="position:relative;bottom:0;">{{$raffle->end_date->diffForHumans()}}</h3>
						@if (\Auth::check())
							<div style="margin-bottom:1em;">
						  	<label>
						  		HOW MANY TIMES?
							  	<input class="form-control text-center" id="amount{{ $raffle->id }}" type="text" name="amount" value="1">
						  	</label><br>
							  <button type="button" id="submit{{ $raffle->id }}" class="aSubmitButton cleargreenBtn btn-success btn">DONATE</button>
							</div>
						@else
							<div style="margin-bottom:1em;">
							  <a  href="/ticketFail" class="aSubmitButton cleargreenBtn btn-success btn">DONATE</a>
							</div>
						@endif
						 <h5>
						 	<span style="color:#31b7d5">ENTRY COUNT :</span> 
						 	{{ \App\Models\RaffleEntry::where('raffles_id','=', $raffle->id)->count() }} 
						 </h5>
					</div>

				</div>
			</div>
		@endforeach
	</div>
	<div style="height:3em;">
	</div>


	<form id="raffleForm" method="POST">
	  <script
	    src="https://checkout.stripe.com/checkout.js"
	  	class="stripe-button"
		data-key="pk_test_9QXLVB6tbq67JmuGwWGco2uX"
		data-amount="500"
		data-name="Global Charity"
		data-description="Entry"
		data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		data-locale="auto"
		data-zip-code="true">
	  </script>
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">


	</form>

</div>

@stop

@section('bottomscript')

	<script>
		$('.aSubmitButton').click(function() {
			var raffleid = $(this).attr('id').replace('submit', '');
			var count = $('#amount' + raffleid).val();
			var newAction = '/raffleCheckout/' + raffleid + '/' + count;
			$('#raffleForm').attr('action', newAction);
			$('.stripe-button-el')[0].click();
		});

		$(document).scroll(function() {
	    	$('#raffHead').css('opacity', 1 - .0026 * $(document).scrollTop());
	    	$('#raffHead').css('margin-top', (-1 * $(document).scrollTop()/100) + 'em');
	    	// console.log($(document).scrollTop());
	    });

	</script>

@stop