@extends('layouts.master')

@section('title')

<title>About Us</title>

@stop

@section('divHead')


@stop

@section('content')
<div class="container">
	<br>
	<br>
	<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
	  <li class="active"><a  id="zeroO"  data-toggle="tab" href="#home">Previous Winners </a></li>
	  <li><a id="zeroO" data-toggle="tab" href="#menu1">Our Mission</a></li>
	  <li><a id="zeroO" data-toggle="tab" href="#menu2">The Creator</a></li>
	</ul>
	<div style="padding:1em;">
		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active">
				<div class="row">
					
					 @foreach(\App\Models\Raffle::where('complete','1')->get() as $winner)
						<div class="col col-sm-6 col-xs-12">
						<h5><span style="color:#0af794;">{{ \App\User::select('username')->where('id',$winner->winner_id)->get()[0]['username'] }}</span>

						</h5> 

						won {{$winner->product}}

						<span style="color:#0af794;">{{$winner->end_date->diffForHumans()}}</span>
						<br>
						<br>
						</div>
					@endforeach
				</div>
			    
			</div>

			<div id="menu1" class="tab-pane fade">

				<p style="">Our mission is to eliminate the man power that is usually necessary for charitable fund-raising by providing massive monetary donations (from The Global Charity Initiative Foundation) directly to various sources of charitable work. Raffles will be created by companies donating a product/service they wish to advertise or celebrities donating some of their time to spend with one or more lucky fans.
			    <br>
			    All games are $5 USD (or equivalent) per entry.<br>
			    Ticket prices to these drawings will be split thusly.
			    </p>
			    <div class="row">
				    <div class="col col-md-6 col-sm-12">
				    	<h4 class="infoHeaders">Drawing Donations</h4>
				    	<blockquote>
				    		<div>60% goes to<br>GCI Foundation.</div>
			    			<div>35% goes to<br>The World Charity Drawing.</div>
			    			<div>5% goes to<br>The Payment System (Stripe)</div>
				    	</blockquote>
				    </div>
				    <div class="col col-md-6 col-sm-12">
				    	<h4 class="infoHeaders">The Global Charity Drawing Donations</h4>
				    	<blockquote>
			    			<div>60% goes to<br>GCI Foundation.</div>
			    			<div>35% goes to<br>The Global Charity Drawing's Pool.</div>
			    			<div>5% goes to<br>the payment system (Stripe)</div>
				    	</blockquote>
				    </div>
			    </div>
			    <br>
			    <br>
			    <div style="display:flex;justify-content: space-around;text-align:center;">
					<a target="_blank" href="https://twitter.com/Emmett_J_Peters?lang=en">Twitter<br>
						<img src="/images/Blue Icons/Twitter.svg" alt="global charity twitter" class="socialIcon">
					</a>
					
					<a target="_blank" href="https://github.com/The-World-Lottery/TheWorldLottery">GitHub<br>
						<img src="/images/Blue Icons/GitHub.svg" alt="global charity GitHub" class="socialIcon">
					</a>
					
				</div>
				<br>


			</div>
			<div id="menu2" class="tab-pane fade">
				<div class="row" id="theCreatorsContainer">
					<div class="col col-sm-4 col-xs-12">
					<h2 class="infoHeaders">Emmett Peters</h2>
						<img class="creatorPics" src="/images/roo.jpg">
						<br>
						<br>
						<img class="creatorPics" src="/images/Emmett.jpg">
						<br>
						<br>
						<div class="">
							<div class="creatorsSocialIcons"><a target="_blank" href="https://github.com/emmettpeters"><img src="/images/ghIcon.png"></a></div>
							<div class="creatorsSocialIcons"><a target="_blank" href="https://www.linkedin.com/in/emmett-peters/"><img src="/images/liIcon.png"></a></div>
						</div><br>
					</div>
					<div class="col col-sm-8 col-xs-12" >
						<h2 class="infoHeaders">My History</h2>
						<blockquote>Raised in the Castroville, Texas countryside with my one younger brother. Always enjoyed working in the shop with my dad on whatever project he was currently on. Became apt at math and sciences at a young age and graduated HS in the top 10 in 2010. I didn't know what I wanted to do after highschool but everyone told me engineering was just the next thing to do since I was already completing calculus and physics classes. Got a 50% scholarchip to Texas A&M for aerospace engineering. Went for 2 years and able to experience the day to day of engineers. Hated every second of it, so I took time off to relax for once. Met a wonderful girl while snowboarding and moved to amarillo with her very soon after. Spent ayear there, the we both moved back to my home in Castroville to help out with the family business. Got the business where it needed to be and decided to look for a new challenge. Racked my brain and remembered I had come up with several website ideas in the past. Brought a few ideas to a development company in San Antonio and was quoted $60,000 for them to create just one of them! So I decided to learn to code for myself. Found a 4 month accelerated coding camp called "Codeup" in Sa. Even though the cost of the class would put me in debt, decided to invest in my future. Halfway through the program I was informed that a grant I applied for paid for the entire thing! Because of this grant I didn't need to find a job immediately and i could actually work on my ideas. 4 months after graduating my idea for a global charity system is ready for the initial public test. I will announce the alpha round of testing on imgur. Every participant is greately appreciated! </blockquote>
					</div> 	
				</div>
			</div>
		</div>
	</div>
</div>
@stop