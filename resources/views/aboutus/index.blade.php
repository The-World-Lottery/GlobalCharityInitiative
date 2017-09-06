@extends('layouts.master')

@section('title')

<title>About Us</title>

@stop

@section('divHead')

<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li class="active"><a data-toggle="tab" href="#home">Our Mission</a></li>
  <li><a data-toggle="tab" href="#menu1">About The World Lottery</a></li>
  <li><a data-toggle="tab" href="#menu2">The Creators</a></li>
</ul>

@stop

@section('content')
	<div style="padding:1em;">
	<div class="tab-content">
	  <div id="home" class="tab-pane fade in active">
	    <h3>HOME</h3>
	    <p>Some content.</p>
	  </div>
	  <div id="menu1" class="tab-pane fade">
	    <h3>Menu 1</h3>
	    <p>Some content in menu 1.</p>
	  </div>
	  <div id="menu2" class="tab-pane fade">
	    <h3>Menu 2</h3>
	    <p>Some content in menu 2.</p>
	  </div>
	</div>
	</div>

@stop