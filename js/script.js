$(document).ready(function(){
      if($(document).width()<=992)
      $('#sidebarCollapse').on('click',function(){
        $('#sidebar').toggleClass('d-none');
         $('#sidebar').toggleClass('sidebar-responsive');      
           });
    });