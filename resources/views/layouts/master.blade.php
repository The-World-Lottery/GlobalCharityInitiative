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
</head>
<body style="font-family: 'Roboto';letter-spacing:1px;">
<img id="backgroundPic" style="opacity:.8;height:100%;width:100%;" src="/images/earthAtNight.jpg">
	<div class="container-fluid">
		<div class="row">
			<div style="" id="main" class="col col-xs-12 col-sm-3">
				@include('layouts.partials._header')
				
			</div>
			<div style="clear:left;" class="col col-sm-6 col-xs-12 borderOpac gameAndChatInfo" id="gameArea">
				<div class="areaHeader">@yield('divHead')</div>
				<div>
					@yield('content')
				</div>
			</div>
			<div style="" class="col col-sm-3 col-xs-12 gameAndChatInfo chatInfoContSpacing">
				<div class="chatInfoMargins borderOpac" id="chat">
					{{-- <div class="areaHeaders">
						Chat
					</div> --}}
					<div style="overflow-y:scroll;height:46vh;">
					@foreach(\App\Models\UserComment::orderBy('created_at','desc')->limit(60)->get() as $comment)
					<span style="padding-left:.5em;"><u style="color:lightgreen;">{{ \App\User::select('username')->where('id',$comment->user_id )->get()[0]['username']}}-</u></span>
					<span class="commentSpacing" style="padding-left:.2em;">{{$comment->content}}</span><br>
					@endforeach
					</div>
					<form action="{{ action('UsersController@comment') }}">
					{!! csrf_field() !!}
						<input type="text" autofocus style="padding:.5em;margin-top:.5em;border:0;border-bottom:1px solid white;color:white;width:100%;background-color:rgba(0,0,0,0);" placeholder="Say Something!" name="comment"><button hidden type="submit">Add comment</button>
					</form>
				</div>
				<div class="chatInfoMargins borderOpac" id="info" style="text-align:center;">
					<br>
					<h3><strong>Jackpot : </strong><span style="color:lightgreen;">${{ number_format(\App\Models\TheWorldLottery::select('current_value')->where('id','1')->get()[0]['current_value'],2,".",",")}} (USD)</span></h3>
					<h4 class="countdown">
	  					World Lottery Drawing in:
	  					<span id="clock" data-clock-id="{{\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['end_date']}}"></span>
					</h4><br>
					<p><strong>Registered Accounts:</strong> {{ \App\User::count()}}</p>
					<p><strong>Highest Value Lottery : </strong><span style="color:lightgreen;">${{ number_format(\App\Models\Lottery::select('current_value')->orderBy('current_value','desc')->limit(1)->get()[0]['current_value'],2,".",",")}} (USD)</span></p>
					<p><strong>Raffle finishing next : <br></strong>{{ \App\Models\Raffle::select('product','content')->orderBy('end_date','asc')->limit(1)->get()[0]['product']}}</p>
					
				</div>
			</div>
		</div>
		{{-- @include('layouts.partials._footer') --}}
	</div>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.js"
	  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
	  crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
	<script src="https://static.filestackapi.com/v3/filestack.js"></script>
	<script src="/main.js" type="text/javascript"></script>
</body>
</html>
