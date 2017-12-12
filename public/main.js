
$(document).ready(function(){

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
	
	//checkbox controllers for the world lottery numbers selection
	$('input[type=checkbox]').on('change', function (e) {
	    if ($('input[type=checkbox]:checked').length > 5) {
	        $(this).prop('checked', false);
	        alert("allowed only 5");
	    }
	});

	$('body').on('click', function(){
		// console.log("stuff");
		if($('#img').val().length > 5){
			var sanitizedSource = $('#img').val().replace(/"/g, "");
			$('#editImg').attr('src', sanitizedSource);
		}
	});

	// //countdown times for end_date
	// var wlEndDate = $('#clock').data("clock-id");
	// var wLottoEndDate = $('.worldLottoClock').data("clock-id")
	// var lottoEndDate = $('.lottoClock').data("clock-id")
	// var raffleEndDate = $('.raffleClock').data("clock-id")

	// $('#clock').countdown(wlEndDate)
	// .on('update.countdown', function(event) {
	// 	var format = '%H:%M:%S';
	// 		if(event.offset.totalDays > 0) {
	// 	format = '%-d day%!d ' + format;
	// 	}
	// 	if(event.offset.weeks > 0) {
	// 	format = '%-w week%!w ' + format;
	// 	}
	// 	$(this).html(event.strftime(format));
	// })
	// .on('finish.countdown', function(event) {
	// 		$(this).html('Drawing Complete!')
	// .parent().addClass('disabled');

	// });

	// $('.worldLottoClock').countdown(wLottoEndDate)
	// .on('update.countdown', function(event) {
	// 	var format = '%H:%M:%S';
	// 		if(event.offset.totalDays > 0) {
	// 	format = '%-d day%!d ' + format;
	// 	}
	// 	if(event.offset.weeks > 0) {
	// 	format = '%-w week%!w ' + format;
	// 	}
	// 	$(this).html(event.strftime(format));
	// })
	// .on('finish.countdown', function(event) {
	// 		$(this).html('Drawing Complete!')
	// .parent().addClass('disabled');

	// });

	// $('.lottoClock').countdown(lottoEndDate)
	// .on('update.countdown', function(event) {
	// 	var format = '%H:%M:%S';
	// 		if(event.offset.totalDays > 0) {
	// 	format = '%-d day%!d ' + format;
	// 	}
	// 	if(event.offset.weeks > 0) {
	// 	format = '%-w week%!w ' + format;
	// 	}
	// 	$(this).html(event.strftime(format));
	// })
	// .on('finish.countdown', function(event) {
	// 		$(this).html('Drawing Complete!')
	// .parent().addClass('disabled');

	// });

	// 	$('.raffleClock').countdown(raffleEndDate)
	// .on('update.countdown', function(event) {
	// 	var format = '%H:%M:%S';
	// 		if(event.offset.totalDays > 0) {
	// 	format = '%-d day%!d ' + format;
	// 	}
	// 	if(event.offset.weeks > 0) {
	// 	format = '%-w week%!w ' + format;
	// 	}
	// 	$(this).html(event.strftime(format));
	// })
	// .on('finish.countdown', function(event) {
	// 		$(this).html('Drawing Complete!')
	// .parent().addClass('disabled');

	// });

	// //current currency value
	// function coinPriceConversion(){
	// 	$.ajax({
	// 		url: 'https://min-api.cryptocompare.com/data/price?fsym=USD&tsyms=BTC,ETH,LTC,BCC,EUR,JPY,GBP,CHF,DOGE,XRP',
	// 		type: 'GET',
	// 		dataType: 'json'
	// 	})
	// 	.done(function(response) {
	// 		console.log("success");
	// 		$('#usdEUR').val(response.EUR);
	// 		$('#usdJPY').val(response.JPY);
	// 		$('#usdGBP').val(response.GBP);
	// 		$('#usdCHF').val(response.CHF);
	// 		$('#usdBTC').val(response.BTC);
	// 		$('#usdETH').val(response.ETH);
	// 		$('#usdLTC').val(response.LTC);
	// 		$('#usdBCH').val(response.BCC);
	// 		$('#usdDoge').val(response.DOGE);
	// 		$('#usdXRP').val(response.XRP);

	// 	})
	// 	.fail(function() {
	// 		console.log("error");
	// 	})
	// 	.always(function() {
	// 		console.log("complete");
	// 	});
	// }

	// coinPriceConversion();

	// setInterval(function(){
	// 	coinPriceConversion();
	// },30000);

    //click for summaries
    $('#hoverTrigger').click(function(){
    	$('#hoverSumm').slideToggle();
	})

	//click for wallets
	 $('#walletTrigger').click(function(){
    	$('.walletShow').slideToggle();
	})

	//click profile image 
	$('.imageTrigger').click(function(){
    	$('.img-circle').slideToggle();
	})

	//hover for nav buttons
    $('.col1').hover(function() {
        $(this).find('img:first').hide();
        $(this).find('div:first').show();
    }, function() {
        $(this).find('img:first').show();
        $(this).find('div:first').hide()
    });

    //hover for raffles
    // $('.raffleCont').hover(function() {
    //     $(this).find('div:first').show();
    // }, function() {
    //     $(this).find('div:first').hide();
    // });

    $('.nav.navbar-nav > li > a').on('click', function(e) {
	    $('.nav.navbar-nav > li > a').removeClass('active');
	    $(this).addClass('active');
	}); 

});
