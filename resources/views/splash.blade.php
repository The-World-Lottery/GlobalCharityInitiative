<!DOCTYPE html>
<html lang="en" style="">

<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<style type="text/css">
		main {
            background-image: url("/images/360Mts.jpg");
            background-position: 
        }
	</style>
	
</head>
	<body id="splashBod">
		<main style="z-index:0;height:100vh;width:100%;position:fixed;">

			<div id="splashHeader" class="row text-center">

			



				<div class="col col-xs-12"  style="padding:0;">
					<h1 id="splashTitle" style="">
						The<span style="color:white;"> World Lottery</span> For Charity
					</h1>
					<br>
					<div id="splashPar" >
						ALL proceeds go to the game winners and, selected charities and global interest projects.
					</div>
					<br>
					<form action="{{action('RafflesController@index')}}">
						{{-- <button class="btn-success btn" style="font-size:1.5em;padding-top:.5em;">LOGIN</button>  
						- OR - --}}
						<a type="submit" class="btn-success btn" style="font-size:1.5em;padding-top:.5em;">SIGN UP</a> 
					</form>	
					<br>
					<div id="splash2" class="row">
						<div class="row">
							<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
			  				<!-- Indicators -->
							  <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							    <li data-target="#myCarousel" data-slide-to="3"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
							    <div class="item active">
							      <div class="splashInfo stepInfoBoxes">
									<h2>1. Check Us Out Free</h2>
									<hr>
									<p class="splashPar">Look at all the games and drawings we have available.<br> Maybe you'd like to try your luck at a daily lottery or a raffle for that celebrity you've always wanted to meet.<br> Or is it the huge world lottery jackpot that catches your eye?</p>
								</div>
							    </div>

							    <div class="item">
							      <div class="splashInfo stepInfoBoxes">
									<h2>2. Create An Account</h2>
									<hr>
									<p class="splashPar">All personal information will be confidential and only used to alert users when they have won a game.<br>You may choose to be alerted by phone and/or email.</p>
								  </div>
							    </div>

							    <div class="item">
							      <div class="splashInfo stepInfoBoxes">
									<h2>3. Choose Your Game</h2>
									<hr>
									<p class="splashPar">Purchase a ticket to a daily lottery, raffle, or world lottery in any currency you choose.<br> All payments and payment information will be handled by Stripe. <br>The World Lottery will never ask you for personal payment information.</p>
								</div>
							    </div>

							     <div class="item">
							      <div class="splashInfo stepInfoBoxes">
									<h2>Good Luck!</h2>
									<hr>
									<p class="splashPar">Once you've got your ticket all you have to do is wait for the drawing.<br>Thank you for participating in Earth's largest ongoing charitable event EVER.</p>
								</div>
							    </div>
							  </div>

							  <!-- Left and right controls -->
							  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							    <span class="glyphicon glyphicon-chevron-left"></span>
							    <span class="sr-only">Previous</span>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							    <span class="glyphicon glyphicon-chevron-right"></span>
							    <span class="sr-only">Next</span>
							  </a>
							</div>
						</div>
					</div>
					

				</div>
				<div id="splashImageHolder">
					<img id="splashImage" src="images/downArrow.png">
				</div>

			</div>

		</main>
		<div class="text-center" style="padding-top:100vh;width:100%;"></div>
		<section style="z-index:100;position:absolute;width:100%;">
			<div id="splash4" class="row infoRows text-center">
				<div class="col col-sm-9">
					<h1>The <span style="color:lightgreen;">World Lottery </span>Jackpot is <b><span style="color:lightgreen;">${{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}</span></b></h1>
				</div>
				<div class="col col-sm-3">
					<button class="btn-success btn" style="font-size:1.5em;padding-top:.5em;margin:.5em 0 .5em 0;">Pick Numbers</button>
				</div>
			</div>

			<div id="splash3" class="row infoRows">
				<div class="col col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="" style="font-size:2.5em;padding:2.5em 0 3em 0;">
						"Which industry sells nothing tangible, offers no direct services, and has never died? Gambling. Now how can we put this industry to the best use?"
						<sub>-Emmett J. Peters (Jan 2015)</sub>
					</div>
				</div>
			</div>
			
			<div id="splash1" class="row infoRows">	
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>The World Lottery</h2>
						<blockquote>The World Lottery is a classic "Pick Six" drawing where players select 5 numbers 1-100 and a power number. The numbers will be selected every two weeks on Saturdays. </blockquote>
						
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>Raffles</h2>
						<blockquote>When a company wishes to advertise through us they may donate one of their products or services to be raffled off. Celebrities may  donate a day of their time to be raffled off for fans. There will always be a winner of each raffle as long as even one ticket is purchased.</blockquote>
						
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>Mixed Lotteries</h2>
						<blockquote>Each Mixed Lottery is created with an initial donation from TWL. Each ticket purchase increases that individual lottery's jackpot and the current World Lottery Jackpot. There will always be a winner of each mixed lottery as long as even one ticket is purchased.</blockquote>
						{{-- <div>{{print_r(\App\Models\Lottery::orderBy('current_value','desc')->limit(1)->get()[0]['current_value'])}}
						</div> --}}
					</div>
				</div>
			</div>

			<div id="splash3" class="row infoRows">
				<div class="col col-xs-12 col-sm-8 col-sm-offset-2">
					<div class="" style="font-size:2.5em;padding:2.5em 0 3em 0;">
						"Why does gambling benefit the MOST fortunate? Also, the internet is a thing, so how are lotteries not paperless yet?"
						<sub>-Emmett J. Peters (Nov 2014)</sub>
					</div>
				</div>
			</div>
		
			
			<div id="splash1" class="row infoRows">
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>The Idea</h2>
						<blockquote>All ticket purchases increase both the value of the jackpot for the game bought into and The World Lottery Foundation. Its is from the foundation that we will allocate funds to selected charities and projects arounf the globe.</blockquote>
						
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>Our Missions</h2>
						<blockquote style="text-align:left;">
							<ol>
								<li>Reduce the manpower usually necessary for fund raising by providing massive monetary donations straight to the source of the charitable work.</li>
								<li>Eliminate the waste the paper driven "state lotteries" generate. (paper consumption, carbon emissions, factory upkeep/utility costs, etc...)</li>
								<li>Help those who need it most.</li>
							</ol>
						</blockquote>
						{{-- <div>{{print_r(\App\Models\Lottery::orderBy('current_value','desc')->limit(1)->get()[0]['current_value'])}}
						</div> --}}
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>Suggestion Box</h2>
						<blockquote>In an effort to keep the website up to date and more user friendly we have included a "suggestion box" we people can leave ideas on site functionality and/or new charities that could use our help. Users can vote in the suggestions and the admins will address the ones with the highest rating.</blockquote>
						
					</div>
				</div>
			</div>
			<div style="padding:2em 0 .1em 0;background-color:rgba(23,90,145,.4);">
			    <div style="" id="random_quote">
			    </div>
			</div>
			
		</section>
	</div>

<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	  {{-- <script type="text/javascript" src="theWorldLottery.js"></script> --}}
	
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script> --}}
	{{-- <script src="https://static.filestackapi.com/v3/filestack.js"></script> --}}
	{{-- <script src="/main.js" type="text/javascript"></script> --}}
	<script>
		
	// alert("At this time THE WORLD LOTTERY is merely a display of coding capability. We hope to actually get it up and running as a non-profit organization very soon.");

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		$(function(){
		    var x = 0;
		    setInterval(function(){
		        x-=1;
		        $('main').css('background-position', x + 'px 0');
		    }, 50);
		});

	
		var timer = 0;
		$(function(){
			setInterval(function(){
		        timer++;
		        if(timer % 2 == 0){
		        	$("#splashImage").animate({
			            opacity:.8
			        },500);
		        } else {
		        	$("#splashImage").animate({
		        		opacity:.2
		        	},500);
		        }

		        if (timer > 100){
		        	timer = 0;
		        }

		    }, 550);
		});

		$(document).scroll(function() {
	    	$("#splashHeader").css("opacity", 1 - .0026 * $(document).scrollTop());
	    	$("#splashHeader").css("margin-top", (-1 * $(document).scrollTop()/100) + "em");
	    	console.log($(document).scrollTop());
	    });
		

	</script>
</body>
</html>