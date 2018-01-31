@extends('layouts.master')

@section('title')

<title>About Us</title>

@stop

@section('divHead')


@stop

@section('content')
<div class="container">
	<div style="display:flex;justify-content: space-around;text-align:center;">
		<a target="_blank" href="https://github.com/The-World-Lottery/TheWorldLottery">GitHub<br>
			<img src="/images/Blue Icons/GitHub.svg" alt="" class="socialIcon">
		</a>
		<a {{-- target="_blank" --}} href="">Instagram<br>
			<img src="/images/Blue Icons/Instagram.svg" alt="" class="socialIcon">
		</a>
		<a {{-- target="_blank" --}} href="https://twitter.com/Emmett_J_Peters?lang=en">Twitter<br>
			<img src="/images/Blue Icons/Twitter.svg" alt="" class="socialIcon">
		</a>
		<a {{-- target="_blank" --}} href="">Facebook<br>
			<img src="/images/Blue Icons/Facebook.svg" alt="" class="socialIcon">
		</a>
	</div>
	<br>
	<br>
	<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
	  <li class="active"><a  id="zeroO"  data-toggle="tab" href="#home">Our Mission</a></li>
	  <li><a id="zeroO" data-toggle="tab" href="#menu1">About GCI</a></li>
	  <li><a id="zeroO" data-toggle="tab" href="#menu2">The Creators</a></li>
	</ul>
	<div style="padding:1em;">
		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active">
			    <p style="text-align:center;">Our mission is to eliminate the man power that is usually necessary for charitable fund-raising by providing massive monetary donations (from The Global Charity Initiative Foundation) directly to various  sources of charitable work. Raffles will be created by companies donating a product/service they wish to advertise or celebrities donating some of their time to spend with one or more lucky fans. Ticket prices to these drawings will be split thusly.</p>
			    <p style="text-align:center;" >All games are $5 USD (or equivalent) per entry.</p>
			    <div class="row">
				    {{-- <div class="col col-md-4 col-sm-12">
				    	<h2 class="infoHeaders">Lottery Ticket Price</h2>
				    	<blockquote>
				    	
				    		<div>40% goes to<br>the current lottery's pool.</div>
				    		<div>30% goes to<br>The World Lottery Foundation.</div>
				    		<div>25% goes to<br>The World Lottery's Pool.</div>
				    		<div>5% goes to<br>the payment system.</div>
				    	
				    	</blockquote>
				    </div> --}}
				    <div class="col col-md-6 col-sm-12">
				    	<h2 class="infoHeaders">Raffle Ticket Price</h2>
				    	<blockquote>
				    		<div>60% goes to<br>GCI Foundation.</div>
			    			<div>35% goes to<br>The World Charity Drawing.</div>
			    			<div>5% goes to<br>The Payment System (Stripe)</div>
				    	</blockquote>
				    </div>
				    <div class="col col-md-6 col-sm-12">
				    	<h2 class="infoHeaders">The World Charity Drawing</h2>
				    	<blockquote>
			    			<div>60% goes to<br>GCI Foundation.</div>
			    			<div>35% goes to<br>The World Charity Drawing's Pool.</div>
			    			<div>5% goes to<br>the payment system (Stripe)</div>
				    	</blockquote>
				    </div>
			    </div>
			</div>

			<div id="menu1" class="tab-pane fade">
				<div class="row">
					<div class="col col-sm-5 col-sm-offset-1 col-xs-12">
						<h1 class="infoHeaders">Our Donors</h1>
						<blockquote>
						Samuel L. Jackson<br>
						{{-- <a target="_blank" href="http://www.theperfecttitle.com/money/money.shtml"><h5>Lottery Quotes</h5></a>
						<a target="_blank" href="https://www.cryptonator.com/?utm_referrer=http%3a%2f%2ftheworldlottery.dev%2fcurrencyconversion"><h5>Currency Conversion Widgets</h5></a>
						<a target="_blank" href="https://www.cryptocompare.com/api/#-api-data-price-"><h5>Currency conversion API Call for point of sale transactions</h5></a>
						<a target="_blank" href="https://www.filestack.com"><h5>Profile and Raffle Image Hosting</h5></a>
						<a target="_blank" href="http://hilios.github.io/jQuery.countdown/"><h5>Games timer Countdown</h5></a> --}}
						</blockquote>
					</div>
					<div class="col col-sm-5 col-xs-12">
						<h1 class="infoHeaders">Charitable Partners</h1>
						<blockquote>
						Hilarity of charity<br>
						{{-- <h5>Laravel framework for PHP</h5>
						<h5>Object Oriented</h5>
						<h5>Cron Jobs for game timeouts</h5>
						<h5>Jquery library for Javascript</h5>
						<h5>Bootstrap and custom media breakpoints<br>for mobile responsiveness</h5>
						<h5>Role based authentication</h5>
						<h5>MVC (Model View Controller)</h5>
						<h5>Events/task scheduling</h5>
						<h5>14 related database tables</h5>
						<h5>140+ Merges, 450+ commits - Github Version control</h5> --}}	
						</blockquote>
					</div>
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row" id="theCreatorsContainer">
					<div class="col col-sm-4 col-xs-12">
					<h2 class="infoHeaders">Emmett Peters</h2>
						<img class="creatorPics" src="/images/Emmett.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/emmettpeters"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/emmett-peters/"><img src="/images/liIcon.png"></a></div>
						</div><br>
					</div>
					<div class="col col-sm-4 col-xs-12" >
					<h2 class="infoHeaders">Avery Hankins</h2>
						<img class="creatorPics" src="/images/avery.png">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/Avery-H"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/avery-hankins/"><img src="/images/liIcon.png"></a></div>
						</div>
						<p></p>
					</div> 	
					<div class="col col-sm-4 col-xs-12" style="">
					<h2 class="infoHeaders">Cody Hastings</h2>
						<img class="creatorPics" src="/images/Cody.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/CodyHastings"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/cody-hastings/"><img src="/images/liIcon.png"></a></div>
						</div>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop