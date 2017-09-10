<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-sm-6">
				<h2 id="headLogo">The World Lottery Logo Here</h2>
				<h4 style="color:lightgreen">Current World Lottery Jackpot is $
				{{-- {{ TheWorldLottery::select('current_value') }} --}}
				</h4>
			</div>
			<div class="col-sm-6">
				@if (Auth::check())
					<span class="headUN">{{Auth::user()->name}}</span>
					<div class="img-circle">
						<img src='{{substr(Auth::user()->image,1,-1)}}' id="profImg">
					</div>
				@else
					<span class="headUN">Not Logged In</span>
				@endif
			</div>
			
		</div>
	</div>
</div>


<div class="row" id="links">
	<div class="col col-xs-12 borderOpac" id="links">
		<a class="navLink" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a>
		<a class="navLink" href="{{action('LotteriesController@index')}}">Lottos</a>
		<a class="navLink" href="{{action('RafflesController@index')}}">Raffles</a>
		<a class="navLink" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a>
		<a class="navLink" href="{{action('SuggestionsController@index')}}">Suggestion Box</a>
		<a class="navLink" href="{{action('AboutUsController@index')}}">About Us</a>
		@if (Auth::check())
    	<a class="navLink" href="{{action('UsersController@show' , Auth::id())}}">Profile</a>
		@else
    	<a class="navLink" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a>
		@endif	
	</div>
</div>
@if(Auth::check() && Auth::user()->is_admin)
<div class="row" id="links">
	<div class="col col-xs-12 borderOpac" id="links">
		<a class="navLink" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a>
		<a class="navLink" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a>
		<a class="navLink" href="{{action('UsersController@index')}}">Manage Users</a>
		<a class="navLink" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a>
	
	</div>
</div>
@endif
