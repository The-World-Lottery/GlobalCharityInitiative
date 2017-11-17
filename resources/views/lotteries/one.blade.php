<p style="margin-top: .5em;background-color:rgba(0,0,0,.5);padding:1em .3em 1em .3em;font-size:2.7em;border-radius: 1em;">
	Next Drawing 
	<br><strong style="color:lightgreen">${{number_format(($lottery->current_value),0,".",",")}}</strong>
	<br>Lottery Ends : <strong style="color:#00ffc4;margin-bottom: .5em;">{{$lottery->end_date->diffForHumans()}}</strong>
</p>