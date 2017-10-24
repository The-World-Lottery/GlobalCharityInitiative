<!DOCTYPE html>
<html>
<head>

	@yield('title')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="/main.css">
	{{-- <link rel="stylesheet" href="/theWorldLottery.css"> --}}
	<link href="https://fonts.googleapis.com/css?family=Racing+Sans+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans+Narrow" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

	<img id="backgroundPic" style="opacity:.41;height:100%;width:100%;" src="/images/earthAtNight.jpg">
	<div class="container-fluid" style="padding:0;">	
		<div class="row">
			@include('layouts.partials._header')	
		</div>
		<div class="row" style="padding-top: 4em;padding-bottom: 2em;">
			<div class="col col-xs-12 col-sm-8">
				<div class="row" style="text-align:center;padding-top:.5em;">
					<h1 style="font-size:4em;color:lightgreen">
						World Lottery Jackpot
					</h1>
					<h1 style="font-size:5em;color:lightgreen">
						<b>${{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}</b>
					</h1>
					<h2 class="countdown">
	  					Drawing in:
	  				</h2>
	  				<h1>
	  					<span id="clock" style="color:#fff257;" data-clock-id="{{\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['end_date']}}"></span>
					</h1>
				</div>
				<div class="row">
					<div class="col col-xs-12">
						<div class="text-center">
						<form action="{{action('TheWorldLotterysController@index')}}">
							<button class="btn btn-lg btn-success" style="height:2em;font-size:2em;">Pick Your Numbers!</button>
						</form>
						</div>
					</div>
					{{-- <div class="col col-xs-12">
						<div id="googlepos">
							<div  id="google_translate_element"></div><script type="text/javascript">
							function googleTranslateElementInit() {
							  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
							}
							</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</div>
					</div> --}}
				</div>
			</div>
			<div id="sidebar" class="col col-sm-4 col-xs-12 chatInfoContSpacing">
					<form action="{{ action('UsersController@comment') }}">
					{!! csrf_field() !!}
						<input type="text" style="padding:.5em;margin-bottom:.5em;border:0;border-bottom:1px solid white;color:white;width:100%;background-color:rgba(0,0,0,0);" placeholder="Say Something!" name="comment">
						<button hidden type="submit">Add comment</button>
					</form>
				<div class="chatInfoMargins borderOpac" id="chat">
					@foreach(\App\Models\UserComment::orderBy('created_at','desc')->limit(60)->get() as $comment)
						<span style="padding-left:.5em;"><u style="color:lightgreen;">{{ \App\User::select('username')->where('id',$comment->user_id )->get()[0]['username']}}-</u></span>
						<span class="commentSpacing" style="padding-left:.2em;">{{$comment->content}}</span><br>
					@endforeach
				</div>
			</div>
		</div>
		<div  style="background-color:rgba(0,0,0,.5);padding-bottom: 2em;" class="row">
			<div style="font-size:1.5em;" class="col col-sm-12 col-xs-12" id="gameArea">
				<div style="margin-top:1em;" class="areaHeader">
					@yield('divHead')
				</div>
				<div style="padding:0 0 2em 0;" >
					@yield('content')
				</div>	
			</div>
		</div>
		<div class="row" style="height:5em;">
			<div class="col col-xs-12 col-sm-4 text-center">
				<h5 style="margin-top:1.6em;">We're trying to save the world. You can bet on that.</h5>
			</div>
			<div class="col col-xs-12 col-sm-4">
				<div style="display:flex;justify-content: space-around;">
					<a target="_blank" href="https://github.com/The-World-Lottery/TheWorldLottery">
						<img src="/images/Blue Icons/GitHub.svg" alt="" class="socialIcon">
					</a>
					<a target="_blank" href="">
						<img src="/images/Blue Icons/Instagram.svg" alt="" class="socialIcon">
					</a>
					<a target="_blank" href="">
						<img src="/images/Blue Icons/Twitter.svg" alt="" class="socialIcon">
					</a>
					<a target="_blank" href="">
						<img src="/images/Blue Icons/Facebook.svg" alt="" class="socialIcon">
					</a>
				</div>
			</div>
			<div class="col col-xs-12 col-sm-4">
				<div class="col col-xs-12">
						<div id="googlepos">
							<div  id="google_translate_element"></div><script type="text/javascript">
							function googleTranslateElementInit() {
							  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
							}
							</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
						</div>
					</div>
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
	<script>
	// 	function myFunction(id) {
	//     var x = document.getElementById(id);
	//     if (x.className.indexOf("w3-show") == -1) {
	//         x.className += " w3-show";
	//     } else { 
	//         x.className = x.className.replace(" w3-show", "");
	//     }
	// }
	</script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
