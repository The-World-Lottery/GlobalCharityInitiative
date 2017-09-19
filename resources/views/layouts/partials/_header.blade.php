
<div class="row" id="header">
	<div id="googlepos" style="background-color:#c0bfff;width:100%;display:flex;justify-content:center;">
		<div>
			<div style="color:white;" id="google_translate_element"></div><script type="text/javascript">
			function googleTranslateElementInit() {
			  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
			}
			</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		</div>
	</div>
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-xs-12">

				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;text-align:center;">The World Lottery For Charity</h2>
			</div>
			<div style="text-align:center" class="col-xs-12">
				@if (Auth::check())Logged In As<br>
					<span style="margin-left:3px;" class="headUN">{{Auth::user()->name}}</span>
					<div class="img-circle">
						<a class="" id="white" href="{{action('UsersController@show' , Auth::id())}}"><img src='{{Auth::user()->image}}' id="profImg"></a>
					</div>
				@else
		
				<a class="" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>
					
				@endif
								
			</div>
			
		</div>
	</div>
</div>
<div class="row">
	<div class="col col-xs-12">

		<div class=" w3-bar-block" style="background-color: rgba(0,0,0,0);">
			{{-- <button onclick="myFunction('Demo1')" style="text-align:center;" class="w3-button w3-block w3-left-align">Games</button>
			<div id="Demo1" class="w3-bar-block w3-hide  w3-card-4 w3-animate-zoom"> --}}
			<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a>
			<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('LotteriesController@index')}}">Lotteries</a>
			<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('RafflesController@index')}}">Raffles</a>
		{{-- 	</div> --}}
			<a style="text-align:center;" class="w3-bar-item w3-button w3-hover-blue" id="white" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a>
			<a style="text-align:center;" class="w3-bar-item w3-button w3-hover-blue" id="white" href="{{action('SuggestionsController@index')}}">Suggestion Box</a>
			<a style="text-align:center;" class="w3-bar-item w3-button w3-hover-blue" id="white" href="{{action('AboutUsController@index')}}">About Us</a>
		@if(Auth::check() && Auth::user()->is_admin)
		  	<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a>
				<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a>
				<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('UsersController@index')}}">Manage Users</a>
				<a style="text-align:center;" class="w3-bar-item w3-button" id="white" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a>
		@endif
		</div>
	</div>
</div>