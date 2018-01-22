<!DOCTYPE html>
<html>
<head>

	@yield('title')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="icon" href="{!! asset('images/globe.png') !!}"/>

</head>
<body id="master" style="font-family: 'Josefin Sans', sans-serif;">
	<div style="height:100%;">
	<img id="backgroundPic" class="center-block" style="opacity:.41;height:100%;" src="/images/earthAtNight.jpg">
		@include('layouts.partials._header')	
		<div class="row" style="padding-top: 6vh;">
			<div id="gameScroll" style="font-size:1.2em;" class="col col-sm-12">
				<div class="text-center">
					@yield('divHead')
				</div>
				@yield('content')	
			</div>
		</div>

		<div class="row"  id="footer" style="">
			<div class="col col-xs-12 col-sm-4">
				<div class="col col-xs-12">
					<div id="googlepos">

						<div  id="google_translate_element"></div>
						<script type="text/javascript">
						function googleTranslateElementInit() {
						  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
						}
						</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


					</div>
				</div>
			</div>
			
			<div class="col col-xs-12 col-sm-4">
				<div style="display:flex;justify-content: space-around;">
				
				</div>
			</div>
			<div class="col col-xs-12 col-sm-4 text-center">
				<h5 style="font-size:1.3em;padding-top:1.5vh;">Bitcoin pay coming soon!</h5>
			</div>
		</div>
		
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<script src="https://static.filestackapi.com/v3/filestack.js"></script>
	<script src="/main.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.js"></script>
	@yield('bottomscript')
</body>
</html>
