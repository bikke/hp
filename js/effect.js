// windowサイズの上から1/5までくるとtransition
$(function(){
  $('.effect1 h3, .effect1 p').css("opacity","0");
  $(window).scroll(function (){
    $(".effect1").each(function(){
      var imgPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > imgPos - windowHeight + windowHeight/5){
        $("p, h3",this).css("opacity","1" );
        $("h3",this).css({
          "font-size": "25px",
          "padding": "0 2px 5px"
        });
      } else {
        $("h3, p",this).css("opacity","0" );
        $("h3",this).css({
          "font-size": "22px"
        });
      }
    });
  });
});
// windowサイズの下から1/5までくるとfadeOut
$(function(){
  $(window).scroll(function (){
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    if(scroll >= windowHeight/5) {
      $('#fadeout_id').fadeOut();
    } else {
      $('#fadeout_id').fadeIn();
    }
  });
});
