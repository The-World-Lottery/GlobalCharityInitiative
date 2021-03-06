@extends('layouts.master')

@section('title')

<title>All Lotteries</title>

@stop

@section('divHead')

<h2 id="hoverTrigger"><strong>All Lotteries</strong>
	<div style="font-size:50%;">$5 USD per entry</div>
</h2>

<p  id="hoverSumm" hidden class="suggBox">Lotteries are created with an initial value coming from the world lottery foundation. When the date/time of each lottery is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>
@stop

@section('content')
	<main class="container" style="max-width:100%;">
		{{-- <div> --}}
			@if (session()->has('successMessage'))
		        <div class="alert alert-success text-center">{{ session('successMessage') }}</div>
		    @endif
		    @if (session()->has('errorMessage'))
		        <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
		    @endif
			<div class="row">
				
				@foreach($lotteries as $lottery)
					
				{{-- <a class="" href="{{ action('LotteriesController@show', $lottery->id) }}"> --}}
					<div class="col col-sm-4 col-xs-12 lotteryPadding">
						<div class="indivLottoCont">
						<h2>
							{{$lottery->title}}
						</h2>
						<p class="lottoInfo">
							Current Value 
							<br><strong style="font-size:2.5em;color:lightgreen">${{number_format(($lottery->current_value),0,".",",")}}</strong>
							<br>Ends: <strong style="color:#00ffc4;margin-bottom: .5em;">{{$lottery->end_date->diffForHumans()}}</strong>
						</p>
						@if (\Auth::check())
							<div style="margin-bottom:1em;">
								<label>HOW MANY?
								  	<input class="form-control text-center" id="amount{{ $lottery->id }}" type="text" name="amount" value="1">
								</label>
							 	<button type="button" id="submit{{ $lottery->id }}" class="aSubmitButton cleargreenBtn btn-success btn">PURCHASE</button>
							</div>
						@else
							<div style="margin-bottom:1em;">
							  <a  href="/ticketFail" class="aSubmitButton cleargreenBtn btn-success btn">GET TICKET</a>
							</div>
						@endif
						<h5 style="color:yellow">ENTRIES SO FAR: {{ \App\Models\LotteryEntry::where('lottery_id','=', $lottery->id)->count() }} </h5>
						</div>
					</div>
				@endforeach
		</div>
		<div style="text-align:center;padding-right:1em;">
			{!! $lotteries->appends(Request::except('page'))->render() !!}
		</div>
		<br>
	
	</main>
	
	<form id="lotteryForm" method="POST">
	  <script
	    src="https://checkout.stripe.com/checkout.js"
	  	class="stripe-button"
		data-key="pk_test_9QXLVB6tbq67JmuGwWGco2uX"
		data-amount="500"
		data-name="Daily Lottery"
		data-description="Price Per Ticket"
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
		var lotteryid = $(this).attr('id').replace('submit', '');
		var count = $('#amount' + lotteryid).val();
		var newAction = '/lotteryCheckout/' + lotteryid + '/' + count;
		$('#lotteryForm').attr('action', newAction);
		$('.stripe-button-el')[0].click();
	});
</script>

@stop