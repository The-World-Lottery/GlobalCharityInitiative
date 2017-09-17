<div class="row" id="header">
<div style="bottom:1em;background-color:#0d0c32;display:flex;justify-content:center;">
<div style="color:white;" id="google_translate_element"></div><script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</div>
	<div class="col col-xs-12 borderOpac" id="head">
		<div class="row">
			<div class="col-xs-12">
				<h2 id="headLogo" style="font-family: 'Racing Sans One', cursive;color:lightblue;font-size:2em;text-align:center;">The World Lottery For Charity</h2>
				<h3 style="color:lightgreen">World Lottery Jackpot is (USD) $
				{{number_format((\App\Models\TheWorldLottery::where('id','=','1')->get()[0]['current_value']),2,".",",")}}
				</h3>
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
<div>
  <ul  class="">
	<li><a class="" id="white" href="{{action('TheWorldLotterysController@index')}}">The World Lottery</a></li>
	<li><a class="" id="white" href="{{action('LotteriesController@index')}}">Lottos</a></li>
	<li><a class="" id="white" href="{{action('RafflesController@index')}}">Raffles</a></li>
	<li><a class="" id="white" href="{{action('CurrencyConversionController@index')}}">Currency Conversions</a></li>
	<li><a class="" id="white" href="{{action('SuggestionsController@index')}}">Suggestion Box</a></li>
	<li><a class="" id="white" href="{{action('AboutUsController@index')}}">About Us</a></li>
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
@if(Auth::check())
	<div class="row">
			<div class="col col-xs-12 text-center">USD: ${{Auth::user()->userWallet->usd}} </div>
	</div>
	<div class="row">
		<div class="col col-xs-6 text-center">Euro: {{Auth::user()->userWallet->eur}} </div>
		<div class="col col-xs-6 text-center">Yen: {{Auth::user()->userWallet->jpy}} </div>
	</div>
	<div class="row">
		<div class="col col-xs-6 text-center">Pounds: {{Auth::user()->userWallet->gbp}} </div>
		<div class="col col-xs-6 text-center">Franks: {{Auth::user()->userWallet->chf}} </div>
	</div>
	<div class="row">
		<div class="col col-xs-6 text-center">Bitcoin: {{Auth::user()->userWallet->btc}} </div>
		<div class="col col-xs-6 text-center">Litecoin: {{Auth::user()->userWallet->ltc}} </div>
	</div>
	<div class="row">
		<div class="col col-xs-6 text-center">Etherium: {{Auth::user()->userWallet->eth}} </div>
		<div class="col col-xs-6 text-center">Dogecoin: {{Auth::user()->userWallet->doge}} </div>
	</div>
	<div class="row">
		<div class="col col-xs-6 text-center">Bitcoin Cash: {{Auth::user()->userWallet->bch}} </div>
		<div class="col col-xs-6 text-center">Ripple: {{Auth::user()->userWallet->xrp}} </div>
	</div>
</div>
@endif
