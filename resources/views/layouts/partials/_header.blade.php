<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-xs-6">
				<h2>The World Lottery Logo Here</h2>
			</div>
			<div class="col-xs-6">
				@if (Auth::check())
				<span style="float:right;margin-top: 2em;">{{Auth::user()->name}}</span>
				<img src="{{Auth::user()->image}}" id="profImg" class="img-circle">
				@else
				<span style="float:right;margin-top: 2em;">Not Logged In</span>
				<img src="" id="nonProfImg" class="img-circle">
				@endif
			</div>
			
		</div>
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