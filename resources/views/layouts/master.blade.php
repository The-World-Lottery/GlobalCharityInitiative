<!DOCTYPE html>
<html>
<head>

	@yield('title')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<link rel="stylesheet" type="text/css" href="/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/main.css">
</head>
<body>
	<div class="container">
		@include('layouts.partials._header')
		<div class="row" id="main">
			<div class="col col-sm-8 col-xs-12 borderOpac gameAndChatInfo" id="gameArea">
				<div class="areaHeaders">@yield('divHead')</div>
				<div>
					@yield('content')
				</div>
			</div>
			<div class="col col-sm-4 col-xs-12 gameAndChatInfo chatInfoContSpacing">
				<div class="chatInfoMargins borderOpac" id="chat"><div class="areaHeaders">Chat</div></div>
				<div class="chatInfoMargins borderOpac" id="info"><div class="areaHeaders">Info</div></div>
			</div>
		</div>
		@include('layouts.partials._footer')
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="/main.js" type="text/javascript"></script>
</body>
</html>
