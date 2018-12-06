@extends('layouts.master')

@section('title')

<title>Dontated Experiences</title>

@stop

@section('divHead')
	<div id="raffHead" class="container">
		<br>
		<h2>Donated Experiences</h2>
	</div>
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

	<div class="container">
		<div class="row" style="margin-top: 2em;">
		@foreach($raffles as $raffle)
			<div class="col-sm-12 col-md-6 col-lg-4">
				<div id="raffleHolder">
					<a  id="raffleAnchor" style="" href="{{ action('RafflesController@show', $raffle->id) }}">
						<div class="raffleCont" style='background-image:url("{{$raffle->img}}");'>
							<div class="raffleTime" style="">{{$raffle->end_date->diffForHumans()}}
							</div>
						</div>
						<div class="raffleInfo">
							<div>Support</div>
							<div>{{$raffle->title}}</div>
							<div style="color:red;position:absolute;right:30px;bottom:25px;"><span class="glyphicon glyphicon-circle-arrow-right"></span><b><i style="padding-bottom:2px;">more info</i></b></div>
							<!-- <h3 title="{{$raffle->product}}" style="/*color:#31b7d5;*/background-color: rgba(0,0,0,.5);margin:-.7em 0 0 0;padding:.6em;"> -->
							<!-- @if (\Auth::check())
								<div style="margin-bottom:1em;">
							  	<label>
							  		HOW MANY ENTRIES?
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
							 	<span style="color:#31b7d5">TOTAL ENTRY COUNT :</span> 
							 	{{ \App\Models\RaffleEntry::where('raffles_id','=', $raffle->id)->count() }} 
							 </h5> -->
						</div>
					</a>	

				</div>
			</div>
		@endforeach
		</div>
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