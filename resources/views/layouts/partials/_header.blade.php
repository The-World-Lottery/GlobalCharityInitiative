
{{-- <div class="row" id="header"> --}}
	{{-- <div class="col col-xs-12 borderOpac" id="head">
	<div id="googlepos" style="width:100%;display:flex;justify-content:center;">
		
			<div  id="google_translate_element"></div><script type="text/javascript">
				function googleTranslateElementInit() {
				  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
				}
				</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
	</div>
		<div class="row">
			<div class="col-xs-12">

				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;text-align:center;">The World Lottery For Charity</h2>
			</div>
			<div style="text-align:center" class="col-xs-12">
				@if (Auth::check())Logged In As<br>
					<span class="headUN">{{Auth::user()->name}}</span>
					<div class="img-circle">
						<a class="" id="white" href="{{action('UsersController@show' , Auth::id())}}"><img src='{{Auth::user()->image}}' id="profImg"></a>
					</div>
				@else
		
				<a class="" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>
					
				@endif
								
			</div>
			
		</div>
	</div> --}}
{{-- </div> --}}
{{-- <div style="display: flex;justify-content: center;" class="row"> --}}

		
			<a class="navButton" href="{{action('RafflesController@index')}}">Raffles</a>
			<a class="navButton" href="{{action('LotteriesController@index')}}">Lotteries</a>
			<a class="navButton" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a>
			<a class="navButton" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a>
			<a class="navButton" href="{{action('SuggestionsController@index')}}">Suggestion Box</a>
			<a class="navButton" href="{{action('AboutUsController@index')}}">About Us</a>
		@if(Auth::check() && Auth::user()->is_admin)
		  	<a class="navButton" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a>
				<a class="navButton" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a>
				<a class="navButton" href="{{action('UsersController@index')}}">Manage Users</a>
				<a class="navButton" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a>
		@endif
{{-- </div> --}}