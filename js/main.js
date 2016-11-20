$(document).ready(function(){
   var scroll_start = 0;
   var aboutOffSetTop = $('.about').offset().top;
   var navBarOffSetHeight = $('.nav_bar').outerHeight(true); /*returns element height + height of padding + height of border + height of margin*/
   console.log(navBarOffSetHeight);
   $(document).scroll(function() { 
      scroll_start = $(window).scrollTop();
      if(scroll_start > aboutOffSetTop - navBarOffSetHeight -15) {
          $('.nav_bar').css('background-color', 'rgba(126, 201, 237,1)');
       } else {
          $('.nav_bar').css('background-color', 'transparent');
       }
   });
});
