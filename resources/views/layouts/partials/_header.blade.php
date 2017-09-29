

			<span style="padding-top: .6em;">
				@if (Auth::check())
					<a href="{{action('UsersController@show' , Auth::id())}}" >{{Auth::user()->name}}</a>
				@else
					<a class="navButton imageTrigger" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>	
				@endif
				<br>
				<a id="walletTrigger" style="text-align:center;">
					Your Wallets
				</a>
			</span>
								


			
			<a class="navButton" href="{{action('RafflesController@index')}}">
				<img class="navIcons" src="/images/ticket.png">
			<div>Raffles</div>
			</a>
			<a class="navButton" href="{{action('LotteriesController@index')}}">
				<img class="navIcons" src="/images/money-bag.png">
			<div>Lotteries</div>
			</a>
			<a class="navButton" href="{{action('TheWorldLotterysController@index')}}">
				<img class="navIcons" src="/images/treasure.png">
			<div>The World Lottery</div>
			</a>
			<a class="navButton" href="{{action('SuggestionsController@index')}}">
				<img class="navIcons" src="/images/chat.png">
			<div>Suggestion Box</div>
			</a>
			<a class="navButton" href="{{action('CurrencyConversionController@index')}}">
				<img class="navIcons" src="/images/coins.png">
			<div>Currency Conversions</div>
			</a>
			<a class="navButton" href="{{action('AboutUsController@index')}}">
				<img class="navIcons" src="/images/round-help-button.png">
			<div>About Us</div>
			</a>
	
			<div id="googlepos" style="width:15%;display:flex;justify-content:center;">

				<div  id="google_translate_element"></div><script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
				</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</div>

