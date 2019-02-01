$(document).ready(function(){

            $('[data-toggle="tooltip"]').tooltip();
       $(window).scroll(function(){
   if($(this).scrollTop() < window.innerHeight-50) { 
              $('.navbar').addClass('trans');


          } else {
              $('.navbar').removeClass('trans');
          }

});
       });