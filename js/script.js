$(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();

      if($(document).width()<=992)
      $('#sidebarCollapse').on('click',function(){
        $('#sidebar').toggleClass('d-none');
         $('#sidebar').toggleClass('sidebar-responsive');
         $('#sidebar').css("z-index","103");      
           });
    });