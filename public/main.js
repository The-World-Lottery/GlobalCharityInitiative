$(document).ready(function(){

	// testing color change background  on hover with javascript 
	// $('#chat').hover(function(){
	// 	$(this).css("background-color","black");
	// });

	//filestack js for click on register
	var client = filestack.init('A5gY0fZEnTzWuvzsVI5Ttz');
 
	$('#filestackButton').click(function(){
	    client.pick({
	      accept: 'image/*',
	      maxFiles: 1,
	      imageMax: [1024, 1024]
	    }).then(function(result){
	      
	      var $imageUrl = JSON.stringify(result.filesUploaded[0].url);

	    $('#img').val($imageUrl);
	  });
	});

	$('input[type=checkbox]').on('change', function (e) {
	    if ($('input[type=checkbox]:checked').length > 5) {
	        $(this).prop('checked', false);
	        alert("allowed only 5");
	    }
	});


	$('body').on('click', function(){
		console.log("stuff");
		if($('#img').val().length > 5){
			var sanitizedSource = $('#img').val().replace(/"/g, "");
			$('#editImg').attr('src', sanitizedSource);
		}

	});

	var wlEndDate = $('#clock').data("clock-id");
	var wLottoEndDate = $('.worldLottoClock').data("clock-id")
	var lottoEndDate = $('.lottoClock').data("clock-id")
	var raffleEndDate = $('.raffleClock').data("clock-id")

	

	$('#clock').countdown(wlEndDate)
	.on('update.countdown', function(event) {
		var format = '%H:%M:%S';
			if(event.offset.totalDays > 0) {
		format = '%-d day%!d ' + format;
		}
		if(event.offset.weeks > 0) {
		format = '%-w week%!w ' + format;
		}
		$(this).html(event.strftime(format));
	})
	.on('finish.countdown', function(event) {
			$(this).html('Drawing Complete!')
	.parent().addClass('disabled');

	});

	$('.worldLottoClock').countdown(wLottoEndDate)
	.on('update.countdown', function(event) {
		var format = '%H:%M:%S';
			if(event.offset.totalDays > 0) {
		format = '%-d day%!d ' + format;
		}
		if(event.offset.weeks > 0) {
		format = '%-w week%!w ' + format;
		}
		$(this).html(event.strftime(format));
	})
	.on('finish.countdown', function(event) {
			$(this).html('Drawing Complete!')
	.parent().addClass('disabled');

	});

	$('.lottoClock').countdown(lottoEndDate)
	.on('update.countdown', function(event) {
		var format = '%H:%M:%S';
			if(event.offset.totalDays > 0) {
		format = '%-d day%!d ' + format;
		}
		if(event.offset.weeks > 0) {
		format = '%-w week%!w ' + format;
		}
		$(this).html(event.strftime(format));
	})
	.on('finish.countdown', function(event) {
			$(this).html('Drawing Complete!')
	.parent().addClass('disabled');

	});

		$('.raffleClock').countdown(raffleEndDate)
	.on('update.countdown', function(event) {
		var format = '%H:%M:%S';
			if(event.offset.totalDays > 0) {
		format = '%-d day%!d ' + format;
		}
		if(event.offset.weeks > 0) {
		format = '%-w week%!w ' + format;
		}
		$(this).html(event.strftime(format));
	})
	.on('finish.countdown', function(event) {
			$(this).html('Drawing Complete!')
	.parent().addClass('disabled');

	});



});
