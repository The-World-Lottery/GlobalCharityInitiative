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

	$('[data-toggle=confirmation]').confirmation({
  		rootSelector: '[data-toggle=confirmation]',
  		// other options
	});



});
