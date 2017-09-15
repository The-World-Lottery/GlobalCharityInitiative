@extends('layouts.master')

@section('title')

<title>About Us</title>

@stop

@section('divHead')

<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a data-toggle="tab" href="#home">Our Mission</a></li>
  <li><a data-toggle="tab" href="#menu1">About The World Lottery</a></li>
  <li><a data-toggle="tab" href="#menu2">The Creators</a></li>
</ul>

@stop

@section('content')
	<div style="padding:1em;">
		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active">
			    <p>Our mission is to eliminate the man power that is usually necessary for fund-raising, for all types of worth-while charities and human interest projects by providing massive monetary donations (from The World Lottery Foundation) directly to the source of the charitable work. We will accomplish this by running a large number of simultaneous lotteries and raffles whose ticket prices will be split thusly.</p>
			    <p>The ticket price for all games is $2 US (or the current equivalency of 2 USD in Euros, Japanese Yen, Pounds, Swiss Franks, Bitcoin, Litecoin, Etherium, Dogecoin or Ripple)</p>
			    <ul>
				    <li>Lottery Ticket Price
				    	<ul>
				    		<li>40% to the current lottery's pool.</li>
				    		<li>30% to The World Lottery Foundation.</li>
				    		<li>25% to The World Lottery's Pool.</li>
				    		<li>5% max to the payment system.</li>
				    	</ul>
				    </li>
				    <li>Raffle Ticket Price
				    	<ul>
				    		<li>50% to The World Lottery Foundation.</li>
			    			<li>45% to The World Lottery's Pool.</li>
			    			<li>5% max to the payment system.</li>
				    	</ul>
				    </li>
				    <li>The World Lottery Ticket Price
				    	<ul>
			    			<li>50% to The World Lottery Foundation.</li>
			    			<li>45% to The World Lottery's Pool.</li>
			    			<li>5% max to the payment system.</li>	
				    	</ul>
				    </li>
			    </ul>
			</div>
			<div id="menu1" class="tab-pane fade">
				<h3 style="text-align: center;">Our Sources and Technologies</h3>
				<div>
					<h3>Sources</h3>
					<a target="_blank" href="http://www.theperfecttitle.com/money/money.shtml"><h5>Lottery Quotes</h5></a>
					
					<a target="_blank" href="https://www.cryptonator.com/?utm_referrer=http%3a%2f%2ftheworldlottery.dev%2fcurrencyconversion"><h5>Currency Conversion Widgets</h5></a>
					
					<a target="_blank" href="https://www.cryptocompare.com/api/#-api-data-price-"><h5>Currency conversion API Call for point of sale transactions</h5></a>
					
					<a target="_blank" href="https://www.filestack.com"><h5>Profile and Raffle Image Hosting</h5></a>
					
					<a target="_blank" href="http://hilios.github.io/jQuery.countdown/"><h5>Games timer Countdown</h5></a>
					
				</div>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row" id="theCreatorsContainer">
					<div class="col col-sm-4 col-xs-12">
					<h4>Emmett</h4>
						<img src="/images/Emmett.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/emmettpeters"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/emmett-peters/"><img src="/images/liIcon.png"></a></div>
						</div><br>
						<p>"A wise man speaks beacuse he has something to say, a fool because he has to say something."</p>
					</div>
					<div class="col col-sm-4 col-xs-12" >
					<h4>Avery</h4>
						<img src="/images/avery.png">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/Avery-H"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/avery-hankins/"><img src="/images/liIcon.png"></a></div>
						</div>
						<p></p>
					</div> 	
					<div class="col col-sm-4 col-xs-12" style="padding-right:1em;">
					<h4>Cody</h4>
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