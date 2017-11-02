<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/main.css">
	
</head>
	<body class="container-fluid" style="height:100vh">
		 
		<div class="row text-center">
			<div class="col col-xs-12" style="font-size: 4vw;">
				<h1 style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;">
					The World Lottery For Charity
				</h1>
				<p class="splashPar">
					ALL proceeds go to the game winners and selected charities, human interest projects.
				</p>
				<form action="{{action('RafflesController@index')}}">
					<button class="btn-success cleargreenBtn">Enter Site</button>
				</form>	
				<div style="margin-top:1em;">
				    <div style="background-color:rgba(0,0,0,.4);" id="random_quote">
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
</body>
</html>