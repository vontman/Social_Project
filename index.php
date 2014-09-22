
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery-ui.js"></script>        
         <!--Addons !!!-->
        <script src='datetimepicker/DateTimePicker.js'></script>
        <script src="fullcalendar/lib/jquery.min.js"></script>
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="fullcalendar/lib/jquery-ui.custom.min.js"></script>
        <script src="fullcalendar/fullcalendar.js"></script>
        <script>
            function auto_blend(){
                if($(window).width()<900){
                    $('.r-sidebar').hide();
                    $('#wrapper').css('float','right');
                    var l_width=$('.l-sidebar').width();
                    var w_width=$(window).width();
                    var width=w_width-l_width;
                    $('#contain_wrapper').css({'width':width,'float':'right'});
                    $('#wrapper').css('float','none');
                }
                else{
                    $('.r-sidebar').show();
                    $('#wrapper').css('float','none');
                    $('#contain_wrapper').css({'width':'auto','float':'none'});
                }
            }
            $(window).resize(function(){
                auto_blend();
            });
            $(document).ready(function(){
//                $('.icon').draggable({axis:'y'},function(){
//                    $('.icon').addClass('icon_drag');
//                });
                auto_blend();
                var icon_hover = true;
                $('.icon').click(function(){
//                    if($(this).hasClass('icon_drag')){
//                        $(this).removeClass('icon_drag');
//                    }
                    leftslider();
//                    $('.test').css({"width":"250px"});
//                  $('.close').toggleClass('close_afterclick');
                });
                if(icon_hover===true){
                    $('.icon').hover(function(){
                       $('.icon').toggleClass('icon_hover'); 
                    });
                }
                function leftslider(){
                    $('.leftslider').toggleClass('leftslider_click');
                    $('.icon').toggleClass('icon_afterclick');
                    $('.li_notifications').toggleClass('li_notification_afterclick');
                    icon_hover=false;
                }
//                $('.icon').hover(function(){
//                    var newleft =$('.icon').position().left +45;
//                   $('.icon').css('left',newleft+'px'); 
//                },function(){
//                    var newleft =$('.icon').position().left -45;
//                   $('.icon').css('left',newleft+'px'); 
//                        });
//                $('.close').click(function(){
////                    $('.test').css({"width":"10px","background":"blue"});
//                    $('.test').toggleClass('color');
//                });
//                $("#datepicker").datepicker({
//                    dateFormat: 'yy-mm-dd'
//                });
                $('.calender').fullCalendar();
            });
        </script>
        <link type='text/css' rel='stylesheet' href='view/style.css'/>
        <link type='text/css' rel='stylesheet' href='view/sidebar.css'/>
        <link type='text/css' rel='stylesheet' href='view/wrapper.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.min.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.structure.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.theme.css'/>
        <!--Addons !!!-->
        <link type='text/css' rel='stylesheet' href='datetimepicker/DateTimePicker.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.min.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.print.css'/>
    </head>
    <body>
        <?php
            include_once 'view/sidebar.php'; 
            include_once 'view/slider.php';
            include_once './view/wrapper.php';
        ?>
    </body>
</html>
