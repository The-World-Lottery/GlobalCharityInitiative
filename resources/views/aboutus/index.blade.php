@extends('layouts.master')

@section('title')

<title>About Us</title>

@stop

@section('divHead')


@stop

@section('content')
	<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
	  <li class="active"><a  id="zeroO"  data-toggle="tab" href="#home">Our Mission</a></li>
	  <li><a  id="zeroO"  data-toggle="tab" href="#menu1">About The World Lottery</a></li>
	  <li><a  id="zeroO"  data-toggle="tab" href="#menu2">The Creators</a></li>
	</ul>
	<div style="padding:1em;">
		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active">
			    <p style="text-align:center;">Our mission is to eliminate the man power that is usually necessary for fund-raising, for all types of worth-while charities and human interest projects by providing massive monetary donations (from The World Lottery Foundation) directly to the source of the charitable work. We will accomplish this by running a large number of simultaneous lotteries and raffles whose ticket prices will be split thusly.</p>
			    <p style="text-align:center;" >The ticket price for all games is $2 US (or the current equivalency of 2 USD in Euros, Japanese Yen, Pounds, Swiss Franks, Bitcoin, Litecoin, Etherium, Dogecoin or Ripple)</p>
			    <div class="row">
				    <blockquote class="col col-md-4 col-sm-12">
				    	<h2 class="infoHeaders">Lottery Ticket Price</h2>
				    	<ul>
				    		<li>40% to the current lottery's pool.</li>
				    		<li>30% to The World Lottery Foundation.</li>
				    		<li>25% to The World Lottery's Pool.</li>
				    		<li>5% max to the payment system.</li>
				    	</ul>
				    </blockquote>
				    <blockquote class="col col-md-4 col-sm-12">
				    	<h2 class="infoHeaders">Raffle Ticket Price</h2>
				    	<ul>
				    		<li>50% to The World Lottery Foundation.</li>
			    			<li>45% to The World Lottery's Pool.</li>
			    			<li>5% max to the payment system.</li>
				    	</ul>
				    </blockquote>
				    <blockquote class="col col-md-4 col-sm-12">
				    	<h2 class="infoHeaders">The World Lottery Ticket Price</h2>
				    	<ul>
			    			<li>50% to The World Lottery Foundation.</li>
			    			<li>45% to The World Lottery's Pool.</li>
			    			<li>5% max to the payment system.</li>	
				    	</ul>
				    </blockquote>
			    </div>
			</div>
			<div id="menu1" class="tab-pane fade">
				<div class="row">
					<blockquote class="col col-sm-5 col-sm-offset-1 col-xs-12">
						<h1 class="infoHeaders">Sources</h1>
						<a target="_blank" href="http://www.theperfecttitle.com/money/money.shtml"><h5>Lottery Quotes</h5></a>
						<a target="_blank" href="https://www.cryptonator.com/?utm_referrer=http%3a%2f%2ftheworldlottery.dev%2fcurrencyconversion"><h5>Currency Conversion Widgets</h5></a>
						<a target="_blank" href="https://www.cryptocompare.com/api/#-api-data-price-"><h5>Currency conversion API Call for point of sale transactions</h5></a>
						<a target="_blank" href="https://www.filestack.com"><h5>Profile and Raffle Image Hosting</h5></a>
						<a target="_blank" href="http://hilios.github.io/jQuery.countdown/"><h5>Games timer Countdown</h5></a>
					</blockquote>
					<blockquote class="col col-sm-5 col-xs-12">
						<h1 class="infoHeaders">Technologies</h1>	
						<h5>Laravel framework for PHP</h5>
						<h5>Object Oriented</h5>
						<h5>Cron Jobs for game timeouts</h5>
						<h5>Jquery library for Javascript</h5>
						<h5>Bootstrap and custom media breakpoints<br>for mobile responsiveness</h5>
						<h5>Role based authentication</h5>
						<h5>MVC (Model View Controller)</h5>
						<h5>Events/task scheduling</h5>
						<h5>14 related database tables</h5>
						<h5>140+ Merges, 450+ commits - Github Version control</h5>	
					</blockquote>
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row" id="theCreatorsContainer">
					<div class="col col-sm-4 col-xs-12">
					<h2 class="infoHeaders">Emmett Peters</h2>
						<img src="/images/Emmett.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/emmettpeters"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/emmett-peters/"><img src="/images/liIcon.png"></a></div>
						</div><br>
					</div>
					<div class="col col-sm-4 col-xs-12" >
					<h2 class="infoHeaders">Avery Hankins</h2>
						<img src="/images/avery.png">
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
						<img src="/images/Cody.jpg">
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

@stop