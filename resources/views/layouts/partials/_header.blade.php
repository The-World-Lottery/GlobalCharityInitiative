<div class="row" id="header">
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-xs-12">
				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;"><img style="float:right;color:white;height:2em;width:2em;background-color:rgba(0,0,0,0);" src="/images/globe.png"><br>The World Lottery For Charity</h2>
				<h3 style="color:lightgreen">World Lottery Jackpot is (USD) $
				{{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}
				</h3>
			</div>
			<div style="text-align:center" class="col-xs-12">
				@if (Auth::check())Logged In As<br>
					<span style="margin-left:3px;" class="headUN">{{Auth::user()->name}}</span>
					<div class="img-circle">
						<img src='{{Auth::user()->image}}' id="profImg">
					</div>
				@else
					<span style="" class="headUN">Not Logged In</span>
					
				@endif
				
			</div>
			
		</div>
	</div>
</div>
<div>
  <ul  class="">
	<li><a class="" id="white" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a></li>
	<li><a class="" id="white" href="{{action('LotteriesController@index')}}">Lottos</a></li>
	<li><a class="" id="white" href="{{action('RafflesController@index')}}">Raffles</a></li>
	<li><a class="" id="white" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a></li>
	<li><a class="" id="white" href="{{action('SuggestionsController@index')}}">Suggestion Box</a></li>
	<li><a class="" id="white" href="{{action('AboutUsController@index')}}">About Us</a></li>
	@if (Auth::check())
	<li><a class="" id="white" href="{{action('UsersController@show' , Auth::id())}}">Profile</a></li>
	@else
	<li><a class="" id="white" href="{{action('Auth\AuthController@getLogin')}}">Login/Register</a></li>
	@endif
  </ul>
</div>

@if(Auth::check() && Auth::user()->is_admin)
<div>

    Admin Functions:
      <ul  class="">
		<li><a class="" id="white" href="{{action('LotteriesController@adminIndex')}}">Manage Lotteries</a></li>
		<li><a class="" id="white" href="{{action('RafflesController@adminIndex')}}">Manage Raffles</a></li>
		<li><a class="" id="white" href="{{action('UsersController@index')}}">Manage Users</a></li>
		<li><a class="" id="white" href="{{action('SuggestionsController@adminIndex')}}">Manage Suggestions</a></li>
      </ul>

</div>
   
@endif
<div style="position:fixed;bottom:1em;background-color:white;display:flex;justify-content:center;border-radius: 1em;width:17.5%;">
<div style="color:white;" id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
