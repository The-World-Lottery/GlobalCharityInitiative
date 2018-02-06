@extends('layouts.master')

@section('title')

<title>Creat a suggestion</title>

@stop

@section('divHead')
<h2 id="hoverTrigger"><strong>Suggestion Box</strong></h2>
<p id="hoverSumm" hidden class="suggBox">The suggestion box is intended for users to be able to create a post detailing a charity or cause they know needs funding or a change that they would like to see us implement on the website. Suggestion priority is determined by the amount of User upvotes on each suggestion. Admins will address the top 5 suggestions every two weeks.</p>
@stop

@section('content')

<ul class="nav nav-tabs" style="display:flex;justify-content: space-around;">
  <li><a  id="zeroO" href="{{action('SuggestionsController@index')}}">All</a></li>
  <li><a  id="zeroO" href="{{action('SuggestionsController@highest')}}">Top 5</a></li>
  <li class="active"><a  id="zeroO" href="{{action('SuggestionsController@create')}}">Add Suggestion</a></li>
</ul>
	<main class="container" style="max-width:80%;"><br>
		<div class="col col-md-6 col-md-offset-3">
			<form method="POST" action="{{ action('SuggestionsController@store') }}">
				{!! csrf_field() !!}
				{!! $errors->first('title', '<span class="help-block">:message</span>')!!}

				<label class="form-group">Title</label><input style="width:100%;" class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"><br>


				{!! $errors->first('content', '<span class="help-block">:message</span>')!!}

				
				<label class="form-group">Content</label><textarea class="form-control" type="text" name="content" id="content">{{ old('content') }}</textarea><br>

				<div style="display:flex;justify-content:center;margin-bottom: 3em;">
					<button class="btn btn-success cleargreenBtn">SUBMIT</button>
				</div>
			</form>
		</div>
	</main>
	<div style="height:3em;">
    </div>
@stop