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
		 
		<div class="row" style="text-align: center;">
			<div class="col col-xs-12" style="top:50;">
				<h1 style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:5em;">The World Lottery For Charity</h1>
				<p class="splashPar">ALL proceeds go to selected charities, human interest projects and TWL staff, development, maintenence and security.</p>
				<form action="{{action('RafflesController@index')}}"><button id="splashButton" style="margin:1em 0 1em 0;color:lightgreen;border:3px solid lightgreen;min-width:8em;border-radius:2em;text-align:center;font-size:2em;background-color:rgba(0,0,0,0);padding:.5em;">Enter Site</button></form>	
				<div style="z-index:30;width:100%;">
				    <div style="background-color:rgba(0,0,0,.4);padding-top:margin:auto;" id="random_quote"></div>
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
</body>
</html>