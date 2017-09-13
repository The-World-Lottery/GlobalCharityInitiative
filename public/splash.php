<!DOCTYPE html>
<html>
<head>
	<title>Welcome!</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="/main.css">
	{{-- <link rel="stylesheet" href="/theWorldLottery.css"> --}}
	<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
</head>
	<body>
	<div id="splashCont" style="opacity:1;color:white">
		<div style="position:relative;height:100vh;background-color:black;z-index:10;position:fixed;width:100%;opacity:1;">
			<div style="position:absolute;top:20%;min-height:50vh;min-width:50vh;margin-left:5%;z-index:20;text-align:center;">
				<h1 style="text-align:center;font-family: 'Racing Sans One', cursive;color:lightblue;font-size:5em;">The World Lottery</h1>
				<p class="splashPar">ALL proceeds go to selected charities, human interest projectsand TWL staff, development, maintenence and security.</p>
				<a class="navLink" href="{{action('LotteriesController@index')}}"><button id="splashButton" style="margin:3em 0 3em 0;width:100%;height:2em;color:lightgreen;border:3px solid lightgreen;border-radius:2em;text-align:center;font-size:2em;background-color:rgba(0,0,0,0);">Click here to enter site</button></a>
				<p class="splashPar">We're trying to save the World.
				You can bet on that. =)</p>
			</div>

			<video style="position:absolute;right:6%;top:10%;" poster="IMGS/magnifyingGlass.png" autoplay="autoplay" muted="muted" loop="loop">
	            <source src="/images/earth.mp4" type="video/mp4">     
	        </video>

			<div style="position:absolute;bottom:2%;width:100%;padding:0 5em 0 5em;">
			    <div style="margin:auto;" id="random_quote"></div>
			</div>
		</div>
	</div>
<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	  {{-- <script type="text/javascript" src="theWorldLottery.js"></script> --}}
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<script src="https://static.filestackapi.com/v3/filestack.js"></script>
	<script src="/main.js" type="text/javascript"></script>
</body>
</html>