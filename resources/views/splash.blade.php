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
	<link rel="icon" href="{!! asset('images/globe.png') !!}"/>
	<style type="text/css">
		main {
            background-image: url("/images/view.jpg");
            background-size: 100% 105%;
            background-position: center;
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax { 
		    background-image: url("/images/tree.jpg");
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
		}

		.parallax2 { 
		    background-image: url("/images/reef.jpg");
		    background-attachment: fixed;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-size: cover;
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
						<button class="btn-success btn" style="font-size:1.5em;padding-top:.5em;">VIEW SITE</button>  
						{{-- - OR -
						<input type="submit" value="SIGN UP" class="btn-success btn" style="font-size:1.5em;padding-top:.5em;"> --}}
					</form>	
					<br>
					<div id="mobileCar1">
						@include('layouts.partials.carousel')
					</div>
					

				</div>
				<div id="splashImageHolder">
					<img id="splashImage" src="images/downArrows.png">
				</div>

			</div>

		</main>
		<div class="text-center" style="padding-top:100vh;width:100%;"></div>
		<section style="z-index:100;position:absolute;width:100%;">
			<div id="splash4" class="row infoRows text-center">
				<div class="col col-sm-12">
					<h1>How It All Works</h1>
				</div>
			</div>

			<div id="splash3" class="row infoRows parallax">
					<div id="mobileCar2">
						@include('layouts.partials.carousel')
					</div>
				<div class="col col-xs-12 col-sm-8 col-sm-offset-2" style="background-color: rgba(0,0,0,.8);">
					<div class="par3">
						We're the first FULLY non-profit gambling organization in history. All earnings are allocated to charitable projects around the globe. The groups we work with will be decided by the world through our social media outlets and in our own suggestion box.  
					</div>
				</div>
			</div>
			
			<div id="splash1" class="row infoRows gamePositioning text-center">	
				<div class="col col-xs-12 col-sm-4" id="gameHold">
					<div class="splashInfo">
						<h2>The World Lottery</h2>
						<blockquote>The World Lottery is a classic "Pick Six" drawing where players select 5 numbers 1-100 and a power number. The numbers will be selected every two weeks on Saturdays. </blockquote>
						
						{{-- Test --}}
						{{-- Test --}}

					</div>
					<div class="bottomPos">
						<p style="font-size:2.7em;padding:1em .3em 1em .3em;margin-top:.5em;background-color:rgba(0,0,0,.5);border-radius: 1em;">The <span style="color:lightgreen;">World Lottery </span>Jackpot is <b><span style="color:lightgreen;">${{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),0,".",",")}}</span></b>
						<br><strong style="color:#00ffc4;margin-bottom: .5em;">{{$twl[0]->end_date->diffForHumans()}}</strong></p>
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4" id="gameHold">
					<div class="splashInfo">
						<h2>Raffles</h2>
						<blockquote>When a company wishes to advertise through us they may donate one of their products or services to be raffled off. Celebrities may  donate a day of their time to be raffled off for fans. There will always be a winner of each raffle as long as even one ticket is purchased.</blockquote>
						
					</div>
					<div class="bottomPos">
						@include('raffles.one')
					</div>
				</div>
				<div class="col col-xs-12 col-sm-4" id="gameHold">
					<div class="splashInfo">
						<h2>Mixed Lotteries</h2>
						<blockquote>Each Mixed Lottery is created with an initial donation from TWL. Each ticket purchase increases that individual lottery's jackpot and the current World Lottery Jackpot. There will always be a winner of each mixed lottery as long as even one ticket is purchased.</blockquote>
						{{-- <div>{{print_r(\App\Models\Lottery::orderBy('current_value','desc')->limit(1)->get()[0]['current_value'])}}
						</div> --}}
					</div>
					<div class="bottomPos">
						@include('lotteries.one')
					</div>
				</div>
			</div>

			<div id="splash3" class="row infoRows parallax2">
				<div class="col col-xs-12 col-sm-8 col-sm-offset-2" style="background-color: rgba(0,0,0,.8);">
					<div class="par3">
						We've created a carbon-neutral, worldwide gambling system that benefits the LEAST fortunate. There's no need for a large factory because our tickets aren't made of paper, they're virtual and of no threat to forests. We also don't need vehicles burning fuel to deliver our tickets because everything is online. You don't even have to drive your own personal vehicle to go buy a ticket. That little rectangle you carry around everywhere and can't stop looking at is the only device you need to play! 
					</div>
				</div>
			</div>
		
			
			<div id="splash1" class="row infoRows">
				<div class="col col-xs-12 col-sm-4">
					<div class="splashInfo">
						<h2>The Idea</h2>
						<blockquote>All ticket purchases increase the value of the jackpot for the game bought into, the value of the current world lottery, and The World Lottery Foundation Fund. Its is from the foundation that we will allocate funds to selected charities and projects around the globe.</blockquote>
						
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
			<div id="splash3" class="row infoRows">
				<div class="col col-xs-12 col-sm-8 col-sm-offset-2 text-center" style="background-color: rgba(0,0,0,.8);">
					<div style="padding:2em 0 .1em 0;">
					    <div style="" id="random_quote">
					    </div>
					</div>
					<form action="{{action('RafflesController@index')}}">
						<button class="btn-success btn" style="margin-bottom:1em;font-size:1.5em;padding-top:.5em;">VIEW SITE</button>  
						{{-- - OR -
						<input type="submit" value="SIGN UP" class="btn-success btn" style="font-size:1.5em;padding-top:.5em;"> --}}
					</form>	
				</div>
			</div>
			
		</section>
	</div>

	<script>document.body.className += ' fade-out';</script>

<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	  <script type="text/javascript" src="theWorldLottery.js"></script>
	
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script> --}}
	{{-- <script src="https://static.filestackapi.com/v3/filestack.js"></script> --}}
	{{-- <script src="/main.js" type="text/javascript"></script> --}}
	<script>
		
	// alert("At this time THE WORLD LOTTERY is merely a display of coding capability. We hope to actually get it up and running as a non-profit organization very soon.");

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">


	$( document ).ready(function() {

		alert("At this moment, This website is for demonstration of coding capability only. The payment system (Stripe) is not live and we do not have any of the items for raffles or lotteries running. However, we do hope to have 2 raffles for time with celebrities running soon. Non-profits are legally allowed to run 2 per year so were going to try and start there. Any celebrity seeing this that is interested in helping this cause please contact me at ejp8611@gmail.com");
		
		$(function() {
		    $('body').removeClass('fade-out');
		});

		// $(function(){
		//     var x = 0;
		//     setInterval(function(){
		//         x-=1;
		//         $('main').css('background-position', x + 'px 0');
		//     }, 50);
		// });

	
		var timer = 0;
		$(function(){
			setInterval(function(){
		        timer++;
		        if(timer % 2 == 0){
		        	$("#splashImage").animate({
			            opacity:.4
			        },800);
		        } else {
		        	$("#splashImage").animate({
		        		opacity:.0
		        	},800);
		        }

		        if (timer > 100){
		        	timer = 0;
		        }

		    }, 1000);
		});

		$(document).scroll(function() {
	    	$("#splashHeader").css("opacity", 1 - .0026 * $(document).scrollTop());
	    	$("#splashHeader").css("margin-top", (-1 * $(document).scrollTop()/100) + "em");
	    	// console.log($(document).scrollTop());
	    });

	    //random quote
		function randomQuote() {
	      $.ajax({
	          url: "https://api.forismatic.com/api/1.0/?",
	          dataType: "jsonp",
	          data: "method=getQuote&format=jsonp&lang=en&jsonp=?",
	          success: function( response ) {
	            $("#random_quote").html("<p id='random_quote' class='lead text-center'>" +
	              response.quoteText + "<br/>&dash; " + response.quoteAuthor + " &dash;</p>");
	          }
	      });
	    }

	    $(function() {
	      randomQuote();
	    });

	    //setting interval of ajax quote call
	    var t = 0;
	    setInterval(function(){
	        if (t % 15 == 14){
	            $('.quote').fadeOut();
	            randomQuote();
	            setTimeout(function(){
	                $('.quote').fadeIn();
	            },700);
	        };  
	        t++;
	    },1000);

	});
			

	</script>
</body>
</html>