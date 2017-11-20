@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<h2 id="hoverTrigger"><strong>All Raffles</strong></h2>
<p id="hoverSumm" hidden class="suggBox">Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. Our hope is that we will become large enough for celebrities to donate "A day with a fan" or something of the like. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>

@stop

@section('content')

<div class="container">

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif

	<div class="row">
		@foreach($raffles as $raffle)
			{{-- <a style="" href="{{ action('RafflesController@show', $raffle->id) }}"> --}}
			<div class="col-sm-6 col-md-4 text-center">
				<div id="raffleHolder">
					<div class="raffleCont" style='background-image:url("{{$raffle->img}}");'>
					</div>
					
					<div class="raffleInfo">
						@if (\Auth::check())
							<div style="margin-bottom:1em;">
							  <button type="button" id="submit{{ $raffle->id }}" class="aSubmitButton cleargreenBtn btn-success btn">GET TICKET</button>
							</div>
						@else
							<div style="margin-bottom:1em;">
							  <a  href="/ticketFail" class="aSubmitButton cleargreenBtn btn-success btn">GET TICKET</a>
							</div>
						@endif
						<h2>{{$raffle->title}}</h2>
						<p>Drawing Happens<br>
							<span style="color:#00ffc4;">{{$raffle->end_date->diffForHumans()}}</span>
						</p>
					</div>
				</div>
			</div>
			{{-- </a> --}}
		@endforeach
	</div>
		{!! $raffles->appends(Request::except('page'))->render() !!} 

	<form id="raffleForm" method="POST">
	  <script
	    src="https://checkout.stripe.com/checkout.js"
	  	class="stripe-button"
		data-key="pk_test_9QXLVB6tbq67JmuGwWGco2uX"
		data-amount="200"
		data-name="Raffle"
		data-description="Widget"
		data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		data-locale="auto"
		data-zip-code="true">
	  </script>
	  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	  <input type="hidden" name="amount" value="200">
	</form>

</div>

@stop

@section('bottomscript')

	<script>
		$('.aSubmitButton').click(function() {
			var raffleid = $(this).attr('id').replace('submit', '');
			var newAction = '/raffleCheckout/' + raffleid;
			$('#raffleForm').attr('action', newAction);
			$('.stripe-button-el')[0].click();
		});
	</script>

@stop