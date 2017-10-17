<div style="color:lightblue;" class="row" id="main">
	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
		<div class="navButton">
			@if (Auth::check())
				<span class="" style="display:flex;justify-content: center;">
					<img src='{{Auth::user()->image}}' id="headImg">
					<span id="nameAndWall">
						<a href="{{action('UsersController@show' , Auth::id())}}" >{{Auth::user()->name}}</a>
						<br>
						{{-- <a id="walletTrigger">Your Wallets</a> --}}
						<a data-toggle="modal" data-target="#myModal">My Wallets</a>
					</span>
				</span>
			@else
				<a class="imageTrigger"  id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>	
			@endif
		</div>
	</div>
	<a class="navButton" href="{{action('RafflesController@index')}}">
		<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col1">
			<img class="auto navIcons" src="/images/ticket.png">
			<div class="auto2">
			 Raffles
			</div>
		</div>
	</a>
	<a class="navButton" href="{{action('LotteriesController@index')}}">
		<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col1">
			<img class="auto navIcons" src="/images/money-bag.png">
			<div class="auto2">
			 Lotteries
			 </div>
		</div>
	</a>
	<a class="navButton" href="{{action('TheWorldLotterysController@index')}}">
		<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col1">
			<img class="auto navIcons" src="/images/treasure.png">
			<div class="auto2">
			 The World Lottery
			 </div>
		</div>
	</a>
	<a class="navButton" href="{{action('SuggestionsController@index')}}">
		<div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 col1">
			<img class="auto navIcons" src="/images/chat.png">
			<div class="auto2">
			 Suggestion Box
			 </div>
		</div>
	</a>
	<a class="navButton" href="{{action('AboutUsController@index')}}">
		<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col1">
			<img class="auto navIcons" src="/images/round-help-button.png">
			<div class="auto2">
			About Us
			</div>
		</div>
	</a>
</div>


{{-- Modal practice --}}


<div id="myModal" class="modal fade" role="dialog" style="color:black;">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Your Currency Wallets</h4>
      </div>
      <div class="modal-body">
 
			<div class="walletShow" style="width:100%;margin:0;">
				<div style="padding-left:3em;display:flex;justify-content:space-around;">
					<div class="walletPadding text-center">USD <br>${{number_format(Auth::user()->userWallet->usd,"2",".",",")}} </div>
				
					<div class="walletPadding text-center">Euro<br>€{{number_format(Auth::user()->userWallet->eur,"2",".",",")}} </div>
					<div class="walletPadding text-center">Yen<br>¥{{number_format(Auth::user()->userWallet->jpy,"2",".",",")}} </div>
				
				
					<div class="walletPadding text-center">Pounds<br>£{{number_format(Auth::user()->userWallet->gbp,"2",".",",")}} </div>
					
					<div class="walletPadding text-center">Franks<br>₣{{number_format(Auth::user()->userWallet->chf,"2",".",",")}} </div>
				<br>
				</div>
				<div style="display:flex;justify-content: space-around;">
				
				
					<div class="walletPadding text-center">Bitcoin<br>{{number_format(Auth::user()->userWallet->btc,"2",".",",")}} </div>
					<div class="walletPadding text-center">Litecoin<br>{{number_format(Auth::user()->userWallet->ltc,"2",".",",")}} </div>
				
				
					<div class="walletPadding text-center">Etherium<br>{{number_format(Auth::user()->userWallet->eth,"2",".",",")}} </div>
					<div class="walletPadding text-center">Dogecoin<br>{{number_format(Auth::user()->userWallet->doge,"2",".",",")}} </div>

				
					<div class="walletPadding text-center">Bitcoin Cash<br>{{number_format(Auth::user()->userWallet->bch,"2",".",",")}} </div>
					<div class="walletPadding text-center">Ripple<br>{{number_format(Auth::user()->userWallet->xrp,"2",".",",")}} </div>
				</div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

