@extends('layouts.master')

@section('title')

<title>All Raffles</title>

@stop

@section('divHead')

<h2 id="hoverTrigger"><strong>All Raffles</strong></h2>
<p id="hoverSumm" hidden class="suggBox">Raffles are created by a company who wishes to advertise through us by donating a product or service they provide. Our hope is that we will become large enough for celebrities to donate "A day with a fan" or something of the like. When the date/time of each Raffle is reached, one user will be randomly selected from the pool of entrys. This ensures there will always be a winner. Each ticket you have to the lottery increases your chances of winning. Good Luck!</p>

@stop

@section('content')
	
	<main class="container" style="max-width:100%;">
	
            

		@if (session()->has('successMessage'))
            <div class="alert alert-success">{{ session('successMessage') }}</div>
        @endif
	<div class="row">
		
	
		@foreach($raffles as $raffle)
		

					<a style="margin:1em;" href="{{ action('RafflesController@show', $raffle->id) }}">
			<div class=" col-sm-6 col-md-4 text-center">
						<div class="raffleCont" style='background-image:url("{{$raffle->img}}");'>
							<div style="border-radius:1em;background-color:rgba(0,0,0,.5);height:100%;display:none;">
								<div style="height:100%;width:100%;">
									<div style="padding-top: 25%;">
										<h4 class="white" style="margin:0;">{{$raffle->title}}</h4>
										<p style="margin-top: 20%;">Drawing Happens<br>
											<span style="color:#00ffc4;">{{$raffle->end_date->diffForHumans()}}</span>
										</p>
									</div>
								</div>
							</div>
						</div>
		</div>
					</a>

		@endforeach
	</div>
		<br>
		<br>
	

		{!! $raffles->appends(Request::except('page'))->render() !!} 
	</main>

@stop