$(document).ready(function(){
        $(window).scroll(function(){
          var bo = $(document).scrollTop();
          $('.nav-logo-img').text(bo);
          if ( bo > 600 ) { $(".navigation-wrp").css("display", "block");
                          } 
            else { $(".navigation-wrp").css("display", "none"); 
                 };
        })
})
$(document).ready(function(){
  $(".arrow-wrp").on("click","a", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 1500);
  });
});
