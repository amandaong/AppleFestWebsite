$(document).ready(function(){
   var scroll_start = 0;
   var titleSectOffSetHeight = $('.titleSection').outerHeight(true);
   var navBarOffSetHeight = $('.titleSection .nav_bar').outerHeight(true); /*returns element height + height of padding + height of border + height of margin*/
   $(document).scroll(function() { 
      scroll_start = $(window).scrollTop();
      if(scroll_start > titleSectOffSetHeight - navBarOffSetHeight -10) {
          $('.titleSection .nav_bar').css('background-color', 'rgba(126, 201, 237,1)'); /*must do .titleSection .nav_bar to specify nav_bar on home page b/c changing color of nav_bar only applies to home page nav_bar*/
       } else {
          $('.titleSection .nav_bar').css('background-color', 'transparent');
       }
   });

});

function allEventsBtnPressed() {
  $('.tr').addClass("hidden");

 /* $('.tr').click(function() {
    var $this = $(this);

    if ($this.hasClass("hidden")) {
      $(this).removeClass("hidden").addClass("visible");

    } else {
      $(this).removeClass("visible").addClass("hidden");
    }
  });*/
}