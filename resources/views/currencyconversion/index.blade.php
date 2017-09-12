@extends('layouts.master')

@section('title')

<title>Currency Conversion</title>

@stop

@section('divHead')

<h4>Currency Conversions</h4>
<p class="suggBox">For your convenience, we have added an area that shows the current currency exchange rate between all the forms of payment we accept for ticket purchase.</p>

<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a data-toggle="tab" href="#home">USD (Dollar)</a></li>
  <li><a data-toggle="tab" href="#menu1">Euro (EUR) </a></li>
  <li><a data-toggle="tab" href="#menu2">Yen (JPY)</a></li>
</ul>

@stop

@section('content')


	<div style="padding:1em;">
		<div class="tab-content">
		  	<div id="home" class="tab-pane fade in active text-center">
				<script type="text/javascript">
crypt_multi_num_cur = "6";
crypt_base_cur_0 = "Bitcoin (BTC)";crypt_target_cur_0 = "US Dollar (USD)";crypt_base_cur_1 = "Litecoin (LTC)";crypt_target_cur_1 = "US Dollar (USD)";crypt_base_cur_2 = "Dogecoin (DOGE)";crypt_target_cur_2 = "US Dollar (USD)";crypt_base_cur_3 = "Ethereum (ETH)";crypt_target_cur_3 = "US Dollar (USD)";crypt_base_cur_4 = "Bitcoin Cash (BCH)";crypt_target_cur_4 = "US Dollar (USD)";crypt_base_cur_5 = "Ripple (XRP)";crypt_target_cur_5 = "US Dollar (USD)";</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/multi_widget.js"></script>	
			    
			</div>
			<div id="menu1" class="tab-pane fade text-center">
				<script type="text/javascript">
	crypt_multi_num_cur = "6";
	crypt_base_cur_0 = "Bitcoin (BTC)";crypt_target_cur_0 = "Euro (EUR)";crypt_base_cur_1 = "Litecoin (LTC)";crypt_target_cur_1 = "Euro (EUR)";crypt_base_cur_2 = "Dogecoin (DOGE)";crypt_target_cur_2 = "Euro (EUR)";crypt_base_cur_3 = "Ethereum (ETH)";crypt_target_cur_3 = "Euro (EUR)";crypt_base_cur_4 = "Bitcoin Cash (BCH)";crypt_target_cur_4 = "Euro (EUR)";crypt_base_cur_5 = "Ripple (XRP)";crypt_target_cur_5 = "Euro (EUR)";</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/multi_widget.js"></script>
				
			</div>
			<div id="menu2" class="tab-pane fade text-center">
				<script type="text/javascript">
	crypt_multi_num_cur = "6";
	crypt_base_cur_0 = "Bitcoin (BTC)";crypt_target_cur_0 = "Japanese Yen (JPY)";crypt_base_cur_1 = "Litecoin (LTC)";crypt_target_cur_1 = "Japanese Yen (JPY)";crypt_base_cur_2 = "Dogecoin (DOGE)";crypt_target_cur_2 = "Japanese Yen (JPY)";crypt_base_cur_3 = "Ethereum (ETH)";crypt_target_cur_3 = "Japanese Yen (JPY)";crypt_base_cur_4 = "Bitcoin Cash (BCH)";crypt_target_cur_4 = "Japanese Yen (JPY)";crypt_base_cur_5 = "Ripple (XRP)";crypt_target_cur_5 = "Japanese Yen (JPY)";crypt_multi_font_color = "#FFFFFF";</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/multi_widget.js"></script>
				
			</div>
		</div>
	</div>


@stop