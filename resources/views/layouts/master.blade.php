<!DOCTYPE html>
<html>
<head>

	@yield('title')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="/main.css">
</head>
<body>


	<div class="container">
		@include('layouts.partials._header')
		<div class="row" id="main">
			<div class="col col-sm-8 col-xs-12 borderOpac gameAndChatInfo" id="gameArea">
				<div class="areaHeader">@yield('divHead')</div>
				<div>
					@yield('content')
				</div>
			</div>
			<div class="col col-sm-4 col-xs-12 gameAndChatInfo chatInfoContSpacing">
				<div class="chatInfoMargins borderOpac" id="chat">
					<div class="areaHeaders">
						Chat
					</div>
					<form action="{{ action('UsersController@comment') }}">
					{!! csrf_field() !!}
						<input type="text" autofocus style="width:100%" placeholder="Say Something!" name="comment"><button hidden  type="submit">Add comment</button>
					</form>
					<div style="overflow:scroll;height:44.1vh;">
					@foreach(\App\Models\UserComment::orderBy('created_at','desc')->limit(60)->get() as $comment)
					<span style="padding-left: .5em;">{{ \App\User::select('username')->where('id',$comment->user_id )->get()[0]['username']}} :</span>
					<span class="commentSpacing" style="padding-left:.2em;">{{$comment->content}}</span><br>
					@endforeach
					</div>
				</div>
				<div class="chatInfoMargins borderOpac" id="info" style="text-align:center;">
					<div class="areaHeaders">Site Info
					</div>
					<br>
					<p><strong>Registered Accounts:</strong> {{ \App\User::count()}}</p>
					<p><strong>TWL Jackpot : </strong>${{ \App\Models\TheWorldLottery::select('current_value')->where('id','1')->get()[0]['current_value']}}</p>
					<p><strong>Highest Value Lottery : </strong>${{ \App\Models\Lottery::select('current_value')->orderBy('current_value','desc')->limit(1)->get()[0]['current_value']}}</p>
					<p><strong>Raffle finishing next : <br></strong>{{ \App\Models\Raffle::select('product','content')->orderBy('end_date','asc')->limit(1)->get()[0]['product']}}</p>
				</div>
			</div>
		</div>
		@include('layouts.partials._footer')
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
