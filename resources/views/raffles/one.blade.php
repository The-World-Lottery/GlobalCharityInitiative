<a style="" href="{{ action('RafflesController@show', $raffle->id) }}">
	<div class="col-sm-12 col-md-12 text-center" style="/*margin:1em 0 1em 0*/;">
		<figure id="splashOne" class="raffleCont" style='position:relative;background-image:url("{{$raffle->img}}");background-size: auto 100% !important;'>
					<div style="position:absolute;width:100%;bottom:0;background-color:rgba(0,0,0,.4);">
						<h2 style="width:100%">{{$raffle->title}}</h2>
					
						<span style="font-size:150%;color:#00ffc4;">{{$raffle->end_date->diffForHumans()}}</span>
					</div>
		</figure>
	</div>
</a>