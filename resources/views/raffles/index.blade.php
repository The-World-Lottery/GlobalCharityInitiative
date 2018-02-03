@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

	<h2 id="hoverTrigger"><strong>All Raffles</strong>
	<div style="font-size:50%;margin-bottom: 1em;">$5 USD per entry</div>
	</h2>
	<p id="hoverSumm" hidden class="suggBox">
	Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. Our hope is that we will become large enough for celebrities to donate "A day with a fan" or something of the like. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!
	</p>

@stop

@section('content')

<div class="container">
	<div style="display:flex;justify-content:center; ">
		{!! $raffles->appends(Request::except('page'))->render() !!}
	</div>
	@if (session()->has('successMessage'))
        <div class="alert alert-success text-center">{{ session('successMessage') }}</div>
    @endif
    @if (session()->has('errorMessage'))
        <div class="alert alert-warning text-center">{{ session('errorMessage') }}</div>
    @endif

	<div class="row">
		@foreach($raffles as $raffle)
			<div class="col-sm-6 col-md-4 text-center">
				<div id="raffleHolder">
					<div class="raffleCont" title="{{$raffle->product}}" style='background-image:url("{{$raffle->img}}");'>
						<a  id="raffleAnchor" style="" href="{{ action('RafflesController@show', $raffle->id) }}">
							<h3 style="/*color:#31b7d5;*/background-color: rgba(0,0,0,.4);margin:0;padding:.6em;">{{$raffle->title}}</h3>
						</a>	
					</div>
					<div class="raffleInfo">
						<h3 style="color:lightgreen;position:relative;bottom:0;">{{$raffle->end_date->diffForHumans()}}</h3>
						@if (\Auth::check())
							<div style="margin-bottom:1em;">
						  	<label>
						  		HOW MANY TICKETS?
							  	<input class="form-control text-center" id="amount{{ $raffle->id }}" type="text" name="amount" value="1">
						  	</label><br>
							  <button type="button" id="submit{{ $raffle->id }}" class="aSubmitButton cleargreenBtn btn-success btn">DONATE</button>
							</div>
						@else
							<div style="margin-bottom:1em;">
							  <a  href="/ticketFail" class="aSubmitButton cleargreenBtn btn-success btn">GET TICKET(S)</a>
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
		data-name="Raffle"
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
	</script>

@stop