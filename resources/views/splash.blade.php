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
		body {
            background-image: url("/images/360Mts.jpg");
        }
	</style>
	
</head>
	<body style="color:white;height:100vh;font-family: 'Josefin Sans', sans-serif !important;">
	{{-- <img id="splashImage" src='images/view.jpg' class="" style="position:fixed;min-height:103vh;"> --}}

		 
		<div id="splashHeader" class="row text-center">
			<div class="col col-xs-12"  style="padding:0;">
				<h1 style="font-size:5em;color:#59c161;font-weight: bold;">
					The World<span style="color:white;"> Lottery</span> For Charity
				</h1>
				<br>
				<div style="font-size:2em;">
					ALL proceeds go to the game winners and, selected charities and global interest projects.
				</div>
				<br>
				<form action="{{action('RafflesController@index')}}">
					<button class="btn-success btn {{-- cleargreenBtn --}}" style="font-size:2em;">Check Us Out!</button>
				</form>	
				<br>
				<div style="padding:2em 0 .1em 0;background-color:rgba(0,0,0,.4);">
				    <div style="" id="random_quote">
				    </div>
				</div>
			</div>
		</div>
<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	  {{-- <script type="text/javascript" src="theWorldLottery.js"></script> --}}
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<script src="https://static.filestackapi.com/v3/filestack.js"></script>
	<script src="/main.js" type="text/javascript"></script>
	<script>
		
	alert("At this time THE WORLD LOTTERY is merely a display of coding capability. We hope to actually get it up and running as a non-profit organization very soon.");

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		
		$(function(){
		    var x = 0;
		    setInterval(function(){
		        x-=1;
		        $('body').css('background-position', x + 'px 0');
		    }, 100);
		});
	</script>
</body>
</html>