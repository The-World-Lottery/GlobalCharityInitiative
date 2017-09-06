<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		
	</div>
</div>


<div class="row" id="links">
	<div class="col col-xs-12 borderOpac" id="links">
		<a class="navLink" href="{{action('LotterysController@index')}}">Lottos</a>
		<a class="navLink" href="{{action('RafflesController@index')}}">Raffles</a>
		<a class="navLink" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a>
		<a class="navLink" href="{{action('SuggestionsController@index')}}">Suggestion Box</a>
		<a class="navLink" href="{{action('AboutUsController@index')}}">About Us</a>
		@if (Auth::check())
    	<a class="navLink" href="{{action('UsersController@show')}}">Profile</a>
		@else
    	<a class="navLink" href="{{action('Auth\AuthController@getLogin')}}">Login</a>
		@endif	
	</div>
</div>