
  <nav id="menu" style="" class="navbar navbar-fixed-top">
 
      <div class="navbar-header">
			{{-- <span id="logoHolder" style='margin-left:.5em;margin-right:.5em;float:left;'>
				<img src="\images\logo2.png" width="55" height="60" alt="Logo Thing main logo">
			</span> --}}
      		@if (Auth::check())
					{{-- <img src='{{Auth::user()->image}}' id="headImg"> --}}
				<a style="border-radius:0 0 2px 2px" class="navbar-brand user navLink" href="{{action('UsersController@show' , Auth::id())}}" >
					<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
					{{Auth::user()->name}}
				</a>
			@else
				<a style="border-radius:0 0 2px 2px" class="navbar-brand user navLink" href="{{action('Auth\AuthController@getLogin')}}"><span class="navLink">LOGIN</span></a>	
			@endif
       
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="border:0px;">
          <span class="icon-bar" id="headLinks"></span>
          <span class="icon-bar" id="headLinks"></span>
          <span class="icon-bar" id="headLinks"></span> 
        </button>
      </div>
		

      <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li class="headLinks">
          	<a style="border-radius:0 0 2px 2px" href="{{action('RafflesController@index')}}">
          	<span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
          	<span class="navLink">Donations</span></a>
          </li>
	      <li id="navSpecialHoverLink" class="headLinks">
          	<a style="border-radius:0 0 2px 2px" href="{{action('TheWorldLotterysController@selectNumbers')}}">
	          	<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
	          	<span id="navSpecialHover" class="navLink">
	          		<span id="drawinghover1"> Global Drawing</span>
	          		<span id="drawinghover2" style="font-size:110%;display:none;color:lightgreen;">${{ number_format((int) App\Models\TheWorldLottery::orderBy('id','desc')->get()[0]['current_value'],0,".",",") }}</span>
	          	</span>
          	</a>
          </li>
          {{-- <li class="headLinks">
          	<a href="{{action('LotteriesController@index')}}">
          	<span class="glyphicon glyphicon-usd" aria-hidden="true"></span>
          	<span class="navLink">Lotteries</span></a>
          </li> --}}
          {{-- class="headLinks" <li>
          	<a href="{{action('TheWorldLotterysController@index')}}"><span class="navLink">The World Lottery</span></a>
          </li> --}}
        	@if(Auth::check() && Auth::user()->is_admin)
        	<li   class="dropdown headLinks">
	          <a  style="border-radius:0 0 2px 2px" href="#" class="dropdown-toggle navLink" style="color:white"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="adminBtn">Admin<span class="caret"></span></a>
	          <ul class="dropdown-menu" id="ddm">
	          	{{-- <li>
	    			<a href="{{action('LotteriesController@adminIndex')}}">
					<span class="navLink">Manage Lotteries</span>
					</a>
				</li> --}}
				<li>
					<a  href="{{action('RafflesController@adminIndex')}}">
					<span  class="navLink">Manage Raffles</span>
					</a>
				</li>
				<li>
					<a  href="{{action('UsersController@index')}}">
					<span  class="navLink">Manage Users</span>
					</a>
				</li>
				<li>
					<a  href="{{action('SuggestionsController@adminIndex')}}">
					<span  class="navLink">Manage Suggestions</span>
					</a>
				</li>
	            {{-- <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">One more separated link</a></li> --}}
	          </ul>
	        </li>
	        @endif
          <li   class="headLinks">
          	<a style="border-radius:0 0 2px 2px" style="border-radius:0 0 2px 2px" href="{{action('SuggestionsController@index')}}">
          	<span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
          	<span class="navLink">Suggestions</span></a>
          </li>
          <li class="headLinks">
          	<a style="border-radius:0 0 2px 2px" href="/">
          	<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
          	<span class="navLink">Home</span></a>
          </li>
          <li   class="headLinks" style="margin-right:1em;">
          	<a style="border-radius:0 0 2px 2px" style="border-radius:0 0 2px 2px" href="{{action('AboutUsController@index')}}">
          	<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
          	<span id="navSuggMobile" class="navLink">About Us</span>
          	</a>
          </li>

          {{-- @if(Auth::check() && count(App\Models\UserWallet::where('user_id', '=', \Auth::id())->get()) === 0)
          <li class="headLinks">
	          
          	  <a href="/saveWallet"><span class="navLink">Create Wallets</span></a>
          </li>
          @elseif (Auth::check())
          <li class="headLinks">
			<a data-toggle="modal" data-target="#myModal"><span class="navLink">My Wallets</span></a>	
		  </li>
		  <div id="myModal" class="modal fade" role="dialog" style="color:black;">
				  <div class="modal-dialog">

				    
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <div class="modal-title">Your Currency Wallets</div>
				      </div>
				      <div class="modal-body">
				 
							<div class="walletShow" style="width:100%;margin:0;">
								<div style="display:flex;justify-content:space-around;width:100%;">
									<div class="walletPadding text-center">USD <br>${{number_format(Auth::user()->userWallet->usd,"2",".",",")}} </div>
								
									<div class="walletPadding text-center">Euro<br>€{{number_format(Auth::user()->userWallet->eur,"2",".",",")}} </div>
									<div class="walletPadding text-center">Yen<br>¥{{number_format(Auth::user()->userWallet->jpy,"2",".",",")}} </div>
								
								
									<div class="walletPadding text-center">Pounds<br>£{{number_format(Auth::user()->userWallet->gbp,"2",".",",")}} </div>
									
									<div class="walletPadding text-center">Franks<br>₣{{number_format(Auth::user()->userWallet->chf,"2",".",",")}} </div>
								</div>
								<div style="display:flex;justify-content: space-around;width:100%;">
								
								
									<div class="walletPadding text-center">Bitcoin<br>{{number_format(Auth::user()->userWallet->btc,"2",".",",")}} </div>
									<div class="walletPadding text-center">Litecoin<br>{{number_format(Auth::user()->userWallet->ltc,"2",".",",")}} </div>
								
								
									<div class="walletPadding text-center">Etherium<br>{{number_format(Auth::user()->userWallet->eth,"2",".",",")}} </div>
									<div class="walletPadding text-center">Dogecoin<br>{{number_format(Auth::user()->userWallet->doge,"2",".",",")}} </div>

								
									<div class="walletPadding text-center">Bitcoin Cash<br>{{number_format(Auth::user()->userWallet->bch,"2",".",",")}} </div>
									<div class="walletPadding text-center">Ripple<br>{{number_format(Auth::user()->userWallet->xrp,"2",".",",")}} </div>
								</div>
							</div>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
				</div>
		  @endif --}}
        </ul>        
      </div>

  </nav>

  