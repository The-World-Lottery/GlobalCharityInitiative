@extends('layouts.master')

@section('title')

<title>Currency Conversion</title>

@stop

@section('divHead')

<span>Currency Conversion</span>

@stop

@section('content')

	<main class="container" style="max-width:100%;float:left;">
		<h1>Currency Conversion</h1>
	
		<script type="text/javascript">
			crypt_multi_num_cur = "3";
			crypt_base_cur_0 = "Bitcoin (BTC)";crypt_target_cur_0 = "US Dollar (USD)";crypt_base_cur_1 = "Litecoin (LTC)";crypt_target_cur_1 = "US Dollar (USD)";crypt_base_cur_2 = "Ethereum (ETH)";crypt_target_cur_2 = "US Dollar (USD)";crypt_multi_border_width = 2;</script><script type="text/javascript" src="https://www.cryptonator.com/ui/js/widget/multi_widget.js"></script>

	</main>

@stop