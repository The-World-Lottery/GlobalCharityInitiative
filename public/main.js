$(document).ready(function(){

	// testing color change background  on hover with javascript 
	// $('#chat').hover(function(){
	// 	$(this).css("background-color","black");
	// });

	var client = filestack.init('A5gY0fZEnTzWuvzsVI5Ttz');
 
	 $('#filestackButton').click(function(){
	    client.pick({
	      accept: 'image/*',
	      maxFiles: 1,
	      imageMax: [1024, 1024]
	    }).then(function(result){
	      
	      var $imageUrl = JSON.stringify(result.filesUploaded[0].url);

	      // console.log(JSON.stringify(result));

	    $('#img').val($imageUrl);
	  });
	})
});
