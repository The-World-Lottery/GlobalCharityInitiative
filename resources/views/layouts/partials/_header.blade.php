{{-- 
<div style="color:yellow;display:flex;justify-content: space-around;">
	<div style="width:15%;" class="navButton">
		@if (Auth::check())
			<span class="" style="display:flex;justify-content: center;">
				<img src='{{Auth::user()->image}}' id="headImg">
				<span>
					<a href="{{action('UsersController@show' , Auth::id())}}" >{{Auth::user()->name}}</a>
					<br>
					<a id="walletTrigger">Your Wallets</a>
				</span>
			</span>
		@else
			<a class="imageTrigger" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>	
		@endif
	</div>
	<a class="navButton" href="{{action('RafflesController@index')}}">
		<img class="auto navIcons" src="/images/ticket.png">
		<div class="auto2">
		 Raffles
		 </div>
	</a>
	<a class="navButton" href="{{action('LotteriesController@index')}}">
		<img class="auto navIcons" src="/images/money-bag.png">
		<div class="auto2">
		 Lotteries
		 </div>
	</a>
	<a class="navButton" href="{{action('TheWorldLotterysController@index')}}">
		<img class="auto navIcons" src="/images/treasure.png">
		<div class="auto2">
		 The World Lottery
		 </div>
	</a>
	<a class="navButton" href="{{action('SuggestionsController@index')}}">
		<img class="auto navIcons" src="/images/chat.png">
		<div class="auto2">
		 Suggestion Box
		 </div>
	</a>
	<a class="navButton" href="{{action('AboutUsController@index')}}">
		<img class="auto navIcons" src="/images/round-help-button.png">
		<div class="auto2">
		 About Us
		 </div>
	</a>
</div> --}}














<div style="color:lightblue;" class="row" id="main">
	<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
		<div class="navButton">
			@if (Auth::check())
				<span class="" style="display:flex;justify-content: center;">
					<img src='{{Auth::user()->image}}' id="headImg">
					<span id="nameAndWall">
						<a href="{{action('UsersController@show' , Auth::id())}}" >{{Auth::user()->name}}</a>
						<br>
						<a id="walletTrigger">Your Wallets</a>
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
