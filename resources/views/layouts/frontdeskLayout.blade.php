<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="admin-themes-lab">
    <meta name="author" content="themes-lab">
    <meta name="csrf-token" content="{{ Session::token() }}"> 
    <link rel="shortcut icon" href=" assets/global/images/favicon.png" type="image/png">
    <title>HOTEL EMILIA MANAGEMENT &amp; SYSTEM</title>
    <link href="{{url('assets/global/css/style.css')}}" rel="stylesheet"> 
    <link href="{{url('assets/global/css/theme.css')}}" rel="stylesheet">
    <link href="{{url('assets/global/css/ui.css')}}" rel="stylesheet">
    <link href="{{url('assets/admin/layout2/css/layout.css')}}" rel="stylesheet">
    <link href="{{url('assets/global/plugins/input-text/style.min.css')}}" rel="stylesheet">

    <link href="{{url('assets/global/plugins/noty/demo/animate.css')}}" rel="stylesheet">

      


      <link href="{{url('assets/global/plugins/dropzone/dropzone.min.css')}}" rel="stylesheet">

      <link href="{{url('assets/global/plugins/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet">

    <link href="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet">

      
     <link href="{{url('assets/imported/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/imported/datatables/css/buttons.dataTables.min.css')}}" rel="stylesheet">
      
     <script src="{{url('assets/imported/datatables/js/jquery.dataTables.min.js')}}"></script>

     <link href="{{url('assets/global/calendar/packages/core/main.css')}}" rel='stylesheet' />
<link href="{{url('assets/global/calendar/packages/timeline/main.css')}}" rel='stylesheet' />
<link href="{{url('assets/global/calendar/packages/resource-timeline/main.css')}}" rel='stylesheet' />
<script src="{{url('assets/global/calendar/packages/core/main.js')}}"></script>
<script src="{{url('assets/global/calendar/packages/interaction/main.js')}}"></script>
<script src="{{url('assets/global/calendar/packages/timeline/main.js')}}"></script>
<script src="{{url('assets/global/calendar/packages/resource-common/main.js')}}"></script>
<script src="{{url('assets/global/calendar/packages/resource-timeline/main.js')}}"></script>






    <!-- jQuery -->
        <script src="{{url('assets/imported/code.jquery.com/jquery.js')}}"></script>
        <!-- DataTables -->
        
        <!-- Bootstrap JavaScript -->
        <script src="{{url('assets/imported/netdna.bootstrapcdn.com/bootstrap.min.js')}}"></script>
        <!-- App scripts -->
        @stack('scripts')
      
      
    <link href="{{url('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.css')}}" rel="stylesheet">
      
    <link href="{{url('assets/global/plugins/step-form-wizard/css/step-form-wizard.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/global/plugins/rateit/rateit.css')}}" rel="stylesheet">
   <script src="{{url('assets/global/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>

      
         <script src="{{url('assets/global/js/numeral-js/numeral.js')}}"></script>
    <script src="{{url('assets/global/js/numeral-js/min/numeral.min.js')}}"></script>
   

<!---  
      -->
    <script type="text/javascript">
function GetClock(){
var d=new Date();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML="<h3><strong>"+nhour+":"+nmin+":"+nsec+ap+"</strong></h3>";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>

  </head>
  <!-- LAYOUT: Apply "submenu-hover" class to body element to have sidebar submenu show on mouse hover -->
  <!-- LAYOUT: Apply "sidebar-collapsed" class to body element to have collapsed sidebar -->
  <!-- LAYOUT: Apply "sidebar-top" class to body element to have sidebar on top of the page -->
  <!-- LAYOUT: Apply "sidebar-hover" class to body element to show sidebar only when your mouse is on left / right corner -->
  <!-- LAYOUT: Apply "submenu-hover" class to body element to show sidebar submenu on mouse hover -->
  <!-- LAYOUT: Apply "fixed-sidebar" class to body to have fixed sidebar -->
  <!-- LAYOUT: Apply "fixed-topbar" class to body to have fixed topbar -->
  <!-- LAYOUT: Apply "rtl" class to body to put the sidebar on the right side -->
  <!-- LAYOUT: Apply "boxed" class to body to have your page with 1200px max width -->

  <!-- THEME STYLE: Apply "theme-sdtl" for Sidebar Dark / Topbar Light -->
  <!-- THEME STYLE: Apply  "theme sdtd" for Sidebar Dark / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltd" for Sidebar Light / Topbar Dark -->
  <!-- THEME STYLE: Apply "theme sltl" for Sidebar Light / Topbar Light -->
  
  <!-- THEME COLOR: Apply "color-default" for dark color: #2B2E33 -->
  <!-- THEME COLOR: Apply "color-primary" for primary color: #319DB5 -->
  <!-- THEME COLOR: Apply "color-red" for red color: #C9625F -->
  <!-- THEME COLOR: Apply "color-green" for green color: #18A689 -->
  <!-- THEME COLOR: Apply "color-orange" for orange color: #B66D39 -->
  <!-- THEME COLOR: Apply "color-purple" for purple color: #6E62B5 -->
  <!-- THEME COLOR: Apply "color-blue" for blue color: #4A89DC -->
  <!-- BEGIN BODY -->
  <body  class="sidebar-condensed fixed-topbar fixed-sidebar theme-sltl color-orange">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <section id="thebody">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar border-right">
        <div class="logopanel">
          <h1>
            EMILIA
          </h1>
        </div>
        <div class="sidebar-inner">

          <div class="sidebar-top">
          

          <div class="date-picker"></div>
         
          </div>
           <div class="menu-title border-bottom">
            Server Time:
          <div id="clockbox"></div>
          </div>
          
          <h5 class="alert bg-green" id="specialRequestHeader">
            <strong>
              SPECIAL REQUESTS 
            </strong>
          </h5>
        
          <ul class="panel nav nav-sidebar" style="height:300px; overflow-y: scroll; overflow-x: hidden; ">
         
              <div class="list-notes current" >
              <div class="notes">
                
                <div id="notes-list">

                  
                  
                
                </div>
              </div>
            </div>
          </ul>
          <!-- SIDEBAR WIDGET FOLDERS -->

         

        </div>
      </div>
      <!-- END SIDEBAR -->
      
      <!-- END MAIN CONTENT -->
     @yield('content');
    </section>
      

    
    <!-- BEGIN QUICKVIEW SIDEBAR -->
   
    <!-- BEGIN SEARCH -->
    
    <!-- END SEARCH -->
    <!-- BEGIN PRELOADER -->

    <!-- END PRELOADER -->
    <a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a> 
      
    <script src="{{url('assets/global/plugins/jquery/jquery-1.11.1.min.js')}}"></script>
      
 
      
    <script src="{{url('assets/global/plugins/jquery/jquery-migrate-1.2.1.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/jquery-ui/jquery-ui-1.11.2.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/gsap/main-gsap.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/jquery-cookies/jquery.cookies.min.js')}}"></script> <!-- Jquery Cookies, for theme -->
    <script src="{{url('assets/global/plugins/jquery-block-ui/jquery.blockUI.min.js')}}"></script> <!-- simulate synchronous behavior when using AJAX -->
    <script src="{{url('assets/global/plugins/bootbox/bootbox.min.js')}}"></script> <!-- Modal with Validation -->
    <script src="{{url('assets/global/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script> <!-- Custom Scrollbar sidebar -->
    <script src="{{url('assets/global/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js')}}"></script> <!-- Show Dropdown on Mouseover -->
    <script src="{{url('assets/global/plugins/charts-sparkline/sparkline.min.js')}}"></script> <!-- Charts Sparkline -->
    <script src="{{url('assets/global/plugins/retina/retina.min.js')}}"></script> <!-- Retina Display -->
    <script src="{{url('assets/global/plugins/select2/select2.min.js')}}"></script> <!-- Select Inputs -->
    <script src="{{url('assets/global/plugins/icheck/icheck.min.js')}}"></script> <!-- Checkbox & Radio Inputs -->
    <script src="{{url('assets/global/plugins/backstretch/backstretch.min.js')}}"></script> <!-- Background Image -->
    <script src="{{url('assets/global/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script> <!-- Animated Progress Bar -->
    <script src="{{url('assets/global/plugins/charts-chartjs/Chart.min.js')}}"></script>
    <script src="{{url('assets/global/js/builder.js')}}"></script> <!-- Theme Builder -->
    <script src="{{url('assets/global/js/sidebar_hover.js')}}"></script> <!-- Sidebar on Hover -->
    <script src="{{url('assets/global/js/application.js')}}"></script> <!-- Main Application Script -->
    <script src="{{url('assets/global/js/plugins.js')}}"></script> <!-- Main Plugin Initialization Script -->
    <script src="{{url('assets/global/js/widgets/notes.js')}}"></script> <!-- Notes Widget -->
    <script src="{{url('assets/global/js/quickview.js')}}"></script> <!-- Chat Script -->
    <script src="{{url('assets/global/js/pages/search.js')}}"></script> <!-- Search Script -->
    <script src="{{url('assets/global/plugins/multidatepicker/multidatespicker.min.js')}}"></script> <!-- Multi dates Picker -->
    <script src="{{url('assets/global/plugins/countup/countUp.min.js')}}"></script> <!-- Animated Counter Number -->

        <script src="{{url('assets/global/plugins/jquery-moment/moment.js')}}"></script>
    <script src="{{url('assets/global/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    <script src="{{url('assets/global/js/pages/fullcalendar.js')}}"></script>



      
     <!-- BEGIN PAGE SCRIPT -->
    <script src="{{url('assets/global/plugins/touchspin/jquery.bootstrap-touchspin.min.js')}}"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
    <script src="{{url('assets/global/plugins/timepicker/jquery-ui-timepicker-addon.min.js')}}"></script> <!-- Time Picker -->
 
    <script src="{{url('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script> <!-- >Bootstrap Date Picker -->
    <script src="{{url('assets/global/plugins/bootstrap-datepicker/locales/bootstrap-datepicker.es.min.js')}}"></script> <!-- >Bootstrap Date Picker in Spanish (can be removed if not use) -->
    <script src="{{url('assets/global/plugins/colorpicker/spectrum.min.js')}}"></script> <!-- Color Picker -->
    <script src="{{url('assets/global/plugins/rateit/jquery.rateit.min.js')}}"></script> <!-- Rating star plugin -->
    <script src="{{url('assets/global/js/pages/form_plugins.js')}}"></script>
    <!-- END PAGE SCRIPT -->
      
      <!-- Wizard -->
    <script src="{{url('assets/global/plugins/step-form-wizard/plugins/parsley/parsley.min.js')}}"></script> <!-- OPTIONAL, IF YOU NEED VALIDATION -->
    <script src="{{url('assets/global/plugins/step-form-wizard/js/step-form-wizard.js')}}"></script> <!-- Step Form Validation -->
    <script src="{{url('assets/global/js/pages/form_wizard.js')}}"></script>
      <script src="{{url('assets/global/plugins/switchery/switchery.min.js')}}"></script>
    <script src="{{url('assets/global/plugins/datatables/jquery.dataTables.min.js')}}"></script> <!-- Tables Filtering, Sorting & Editing -->
    <script src="{{url('assets/global/js/pages/table_editable.js')}}"></script>
      <script src="{{url('assets/global/js/pages/table_dynamic.js')}}"></script>
      <script src="{{url('assets/global/plugins/touchspin/jquery.bootstrap-touchspin.min.js')}}"></script>
       <script src="{{url('assets/global/plugins/bootstrap/js/jasny-bootstrap.min.js')}}"></script>

       <script src="{{url('assets/global/plugins/noty/js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
      
    <script>
      $('.colors-list li').click(function() {
          var self = $(this);
          var portlet_header = self.parent().parent().parent().prev();
          var portlet_footer = self.parent().parent().parent().next();
          var portlet_full = self.parent().parent().parent().parent();
          if (!self.hasClass('active')) {
              self.siblings().removeClass('active');
              if (self.parent().hasClass('color-footer')) {
                  var classes = portlet_footer.attr('class').split(/\s+/);
              }
              if (self.parent().hasClass('color-header')) {
                  var classes = portlet_header.attr('class').split(/\s+/);
              }
              if (self.parent().hasClass('color-full')) {
                  var classes = portlet_full.attr('class').split(/\s+/);
              }
              var pattern = /^bg-/;
              for (var i = 0; i < classes.length; i++) {
                  var className = classes[i];
                  if (className.match(pattern)) {
                      if (self.parent().hasClass('color-footer')) portlet_footer.removeClass(className);
                      if (self.parent().hasClass('color-header'))  portlet_header.removeClass(className);
                      if (self.parent().hasClass('color-full'))  portlet_full.removeClass(className);
                  }
              }
              var color = self.attr('class');
              bg_color = 'bg-' + color;
              if (self.parent().hasClass('color-footer')) portlet_footer.addClass(bg_color);
              if (self.parent().hasClass('color-header')) portlet_header.addClass(bg_color);
              if (self.parent().hasClass('color-full')) portlet_full.addClass(bg_color);
              self.addClass('active');
          };
      });
    </script>

    <script type="text/javascript">

      $(document).ready(function(){
        $.ajax({
                   type:"POST",
                   url: "{{route('frontdesk.specialRequestList')}}",
                   headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') },
                   success: function (datas){
                    if(Object.keys(datas).length>0)
                      {
                        $("#specialRequestHeader").removeClass("bg-green");
                        $("#specialRequestHeader").addClass("bg-red");
                        $('#specialRequestCount').html(Object.keys(datas).length);                        
                      }

                      if(Object.keys(datas).length=0)
                      {
                        $("#specialRequestHeader").removeClass("bg-red");
                        $("#specialRequestHeader").addClass("bg-green");
                        $('#specialRequestCount').html(Object.keys(datas).length);                        
                      }

                      $('#notes-list').html('');
                      $.each(datas, function (i, item) {
                        var htmlAppend = '<div class="note-item media current fade in">'+
                                        '<div>'+
                                          '<span class="pull-left p-r-5">'+
                                            '<li class="fa fa-check"></li>'+
                                            '</span>'+
                                          '<div>'+
                                            '<strong>'+item.roomTransaction+'</strong>'+
                                            '<p>'+item.note+'</p>'+
                                          '</div>'+
                                          '<p><strong><small>Request Time:</small>'+item.requestTime+'</strong></p>'+
                                        '</div>'+
                                      '</div>'+
                                      '<hr>';

                          $('#notes-list').append(htmlAppend);
                          
                      });

                   }
               });
      });
      window.setInterval(function(){
        /// call your function here
        $.ajax({
                   type:"POST",
                   url: "{{route('frontdesk.specialRequestList')}}",
                   headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') },
                   success: function (datas){
                      //alert(Object.keys(datas).length);
                      if(Object.keys(datas).length>0)
                      {
                        $("#specialRequestHeader").removeClass("bg-green");
                        $("#specialRequestHeader").addClass("bg-red");
                        $('#specialRequestCount').html(Object.keys(datas).length);                        
                      }

                      if(Object.keys(datas).length=0)
                      {
                        $("#specialRequestHeader").removeClass("bg-red");
                        $("#specialRequestHeader").addClass("bg-green");
                        $('#specialRequestCount').html(Object.keys(datas).length);                        
                      }  
                        

                      $('#notes-list').html('');
                      $.each(datas, function (i, item) {
                        var htmlAppend = '<div class="note-item media current fade in">'+
                                        '<div>'+
                                          '<span class="pull-left p-r-5">'+
                                            '<li class="fa fa-check"></li>'+
                                            '</span>'+
                                          '<div>'+
                                            '<strong>'+item.roomTransaction+'</strong>'+
                                            '<p>'+item.note+'</p>'+
                                          '</div>'+
                                          '<p><bold><strong><small>Request Time:</small>'+item.requestTime+'</strong></bold></p>'+
                                        '</div>'+
                                      '</div>'+
                                      '<hr>';

                          $('#notes-list').append(htmlAppend);
                          
                      });

                   }
               });

      }, 5000);

    </script>
    <script src="{{url('assets/admin/layout2/js/layout.js')}}"></script>
    
     <script src="{{url('assets/imported/datatables/js/jquery.dataTables2.min.js')}}"></script>
    <script src="{{url('assets/imported/datatables/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{url('assets/imported/datatables/js/buttons.print.min.js')}}"></script>

    
      
  </body>
</html>