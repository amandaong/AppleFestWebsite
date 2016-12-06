$(document).ready(function(){
   var scroll_start = 0;
   var titleSectOffSetHeight = $('.titleSection').outerHeight(true);
   var navBarOffSetHeight = $('.titleSection .nav_bar').outerHeight(true); /*returns element height + height of padding + height of border + height of margin*/
   $(document).scroll(function() { 
      scroll_start = $(window).scrollTop();
      if(scroll_start > titleSectOffSetHeight - navBarOffSetHeight) {
          $('.nav_bar').css('background-color', 'rgba(230, 16, 10, 0.9)'); /*must do .titleSection .nav_bar to specify nav_bar on home page b/c changing color of nav_bar only applies to home page nav_bar*/
          $('.nav_bar').css('box-shadow', '1px 1px rgba(200,200,200,1)'); /*offset shadow by 1px to right, by 1px below nav bar, color*/
       } else {
          $('.nav_bar').css('background-color', 'rgba(230, 16, 10, 0)');
          $('.nav_bar').css('box-shadow', '1px 1px transparent');
       }
   });

});

function map_flip(index) {
    "use strict";
    // variables
    var map_images = ["map.jpg", "map_craftshow.jpg", "map_commons.jpg", "map_food.jpg", "map_stage.jpg", "map_park.jpg", "map_allay.jpg", "map_rest.jpg"],
        map_image = document.getElementById('map');
    // procedural code
    map_image.src = 'images/' + map_images[index];
}

