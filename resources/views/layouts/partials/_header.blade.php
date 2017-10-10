
<div class="row" style="color:yellow;display: flex;justify-content: space-around;">
	<div class="navButton" style="padding-top: .7em;">
		@if (Auth::check())
			<a href="{{action('UsersController@show' , Auth::id())}}" >{{Auth::user()->name}}</a>
			<br>
			<a id="walletTrigger" style="text-align:center;">
				Your Wallets
			</a>
		@else
			<a class="imageTrigger" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>	
		@endif
	</div>
	<a class="navButton" href="{{action('RafflesController@index')}}">
		<img class="navIcons" src="/images/ticket.png">
			Raffles
	</a>
	<a class="navButton" href="{{action('LotteriesController@index')}}">
		<img class="navIcons" src="/images/money-bag.png">
			Lotteries
	</a>
	<a class="navButton" href="{{action('TheWorldLotterysController@index')}}">
		<img class="navIcons" src="/images/treasure.png">
			The World Lottery
	</a>
	<a class="navButton" href="{{action('SuggestionsController@index')}}">
		<img class="navIcons" src="/images/chat.png">
			Suggestion Box
	</a>
	<a class="navButton" href="{{action('AboutUsController@index')}}">
		<img class="navIcons" src="/images/round-help-button.png">
			About Us
	</a>
</div>