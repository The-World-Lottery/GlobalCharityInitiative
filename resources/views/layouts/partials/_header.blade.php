<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">

			<div id="googlepos" style="background-color:#161554;width:100%;display:flex;justify-content:center;">
				<div>
					<div style="color:white;" id="google_translate_element"></div><script type="text/javascript">
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
					}
					</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
				</div>
			</div>
			<div class="col-xs-12">

				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;text-align:center;">The World Lottery For Charity</h2>

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

   <!-- /.navbar-collapse -->
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

