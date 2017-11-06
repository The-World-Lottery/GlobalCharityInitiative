<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link rel="stylesheet" type="text/css" href="/main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
</head>
	<body class="container-fluid" style="height:100vh;font-size:2em;">
		 
		<div class="row text-center">
			<div class="col col-xs-12" >
				<h1 id="splashHeader">
					The World Lottery For Charity
				</h1>
				<div style="font-family:'Open Sans', sans-serif;">
					ALL proceeds go to the game winners and selected charities, human interest projects.
				</div>
				<form action="{{action('RafflesController@index')}}">
					<button class="btn-success">Enter Site</button>
				</form>	
				<div>
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
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>