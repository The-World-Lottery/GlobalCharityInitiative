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

	$('#img').on('value', function(e){
		console.log("everything is awesome");
		$(this).src($(this).val());
	});



});
