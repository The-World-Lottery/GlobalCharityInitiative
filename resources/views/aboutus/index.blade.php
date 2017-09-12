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
				<h3>Menu 1</h3>
				<p>Some content in menu 1.</p>
			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row" id="theCreatorsContainer">
					<div class="col col-sm-4 col-xs-12">
					<h4>Emmett</h4>
						<img src="/images/Emmett.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><img src="/images/ghIcon.png"></div>
							<div class="creatorsSocialIcons"><img src="/images/liIcon.png"></div>
						</div>
					</div>
					<div class="col col-sm-4 col-xs-12">
					<h4>Cody</h4>
						<img src="/images/Cody.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><img src="/images/ghIcon.png"></div>
							<div class="creatorsSocialIcons"><img src="/images/liIcon.png"></div>
						</div>
					</div>
					<div class="col col-sm-4 col-xs-12" style="padding-right:1em;">
					<h4>Avery</h4>
						<img src="/images/Avery.JPG">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><img src="/images/ghIcon.png"></div>
							<div class="creatorsSocialIcons"><img src="/images/liIcon.png"></div>
						</div>
					</div> 	
				</div>
			</div>
		</div>
	</div>

@stop