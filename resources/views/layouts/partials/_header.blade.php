<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-sm-8">
				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;"><img style="height:2em;width:2em;background-color:rgba(0,0,0,0);" src="/images/earth.png"> The World Lottery For Charity</h2>
				<h4 style="color:lightgreen">Current Estimated World Lottery Jackpot is (USD) $
				{{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}
				</h4>
			</div>
			<div class="col-sm-4">
				@if (Auth::check())
					<span style="padding-right:1em" class="headUN">{{Auth::user()->name}}</span>
					<div class="img-circle">
						<img src='{{substr(Auth::user()->image,1,-1)}}' id="profImg">
					</div>
				@else
					<span style="padding-right:1em" class="headUN">Not Logged In</span>
					
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
    <div class="w3-sidebar w3-light-grey w3-card-2" style="width:200px">
  	<a href="#" class="w3-bar-item w3-button">The World Lottery</a> 
  	<button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Games</button>
  	<div id="demoAcc" class="w3-bar-block w3-hide w3-white w3-card-4">
    <a href="#" class="w3-bar-item w3-button">Link</a>
    <a href="#" class="w3-bar-item w3-button">Link</a>
  	</div>
      <ul style="display:flex;justify-content:space-around;" class="nav navbar-nav">
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
		@endif
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


@if(Auth::check() && Auth::user()->is_admin)
<nav class="navbar navbar-default btn-custom" id="mainNav">
  <div class="container-fluid borderOpac">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul style="display:flex;justify-content:space-around;" class="nav navbar-nav">
		<li><a class="navLink btn-custom" id="white" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('UsersController@index')}}">Manage Users</a></li>
		<li><a class="navLink btn-custom" id="white" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a></li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
@endif

