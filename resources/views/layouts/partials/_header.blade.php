<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-sm-8">
				<h2 id="headLogo"><img style="height:2em;width:2em;background-color:rgba(0,0,0,0);" src="/images/earth.png"> The World Lottery For Charity</h2>
				<h4 style="color:lightgreen">Current Estimated World Lottery Jackpot is (USD) $
				{{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}
				</h4>
			</div>
			<div class="col-sm-4">
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
<nav class="navbar navbar-default btn-custom" id="mainNav">
  <div class="container-fluid borderOpac">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
		<li><a class="navLink btn-custom" id="white" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('LotteriesController@index')}}">Lottos</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('RafflesController@index')}}">Raffles</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('SuggestionsController@index')}}">Suggestion Box</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('AboutUsController@index')}}">About Us</a></li>
		@if (Auth::check())
    	<li><a class="navLink btn-custom" id="white" href="{{action('UsersController@show' , Auth::id())}}">Profile</a></li>
		@else
    	<li><a class="navLink btn-custom" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

{{-- <div class="row" id="links">
	<div class="col navbar col-xs-12 borderOpac" id="links">
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
</div> --}}
{{-- @if(Auth::check() && Auth::user()->is_admin) --}}
{{-- <div class="row" id="links">
	<div class="col col-xs-12 borderOpac" id="links">
		<a class="navLink" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a>
		<a class="navLink" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a>
		<a class="navLink" href="{{action('UsersController@index')}}">Manage Users</a>
		<a class="navLink" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a>
	
	</div>
</div> --}}
@endif
