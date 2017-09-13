$( document ).ready(function() {

    //hero area scrolling functionality (custom -EP)
    $(window).scroll(function (event) {
        var scroll = $(window).scrollTop();
        var j=0;
        if(scroll>0 && j==0){
            setTimeout(function(){
                j=1;
            },600);
            $('.quote').animate({
                "paddingBottom":"0"
            });
            $('#spacer').animate({
                "minHeight":"10em"
            },900);
            $(".dropdown").slideUp(1000);
        } else {
            setTimeout(function(){
                j=0;
            },600);
            $('.quote').animate({
                "paddingBottom":"10em"
            }); 
            $('#spacer').animate({
                "minHeight":"20em"
            },900);
            $(".dropdown").slideDown(1000);
        }
    });

    //iterating through header buttons and showing the bottom border with style (custom -EP)
    var headerButtonArray =[$("#lottoB"),$("#raffleB"),$("#theWorldLottery"),$("#contact"),$("#signIn")];
    var i=0;
    setInterval(function(){ 
        headerButtonArray[i%5].toggleClass('buttonColor');
        setTimeout(function(){
            headerButtonArray[i%5].toggleClass('buttonColor');
        i++;
        },1000) 
    },3000);

    //API

    function randomQuote() {
      $.ajax({
          url: "https://api.forismatic.com/api/1.0/?",
          dataType: "jsonp",
          data: "method=getQuote&format=jsonp&lang=en&jsonp=?",
          success: function( response ) {
            $("#random_quote").html("<p id='random_quote' class='lead text-center'>" +
              response.quoteText + "<br/>&dash; " + response.quoteAuthor + " &dash;</p>");
          }
      });
    }

    $(function() {
      randomQuote();
    });

    //setting interval of ajax quote call

    var t = 0;
    setInterval(function(){
        if (t % 15 == 14){
            $('.quote').fadeOut();
            randomQuote();
            setTimeout(function(){
                $('.quote').fadeIn();
            },700);
        };  
        t++;
    },1000);

    $('#register').click(function(){
        $(this).toggleClass('colorChange');
        $('form').slideToggle();
    })



});
