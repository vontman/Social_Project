            function auto_blend(){
                if($(window).width()<980){
                    $('.r-sidebar').css({"width":'0','min-width':'0'});
                    $('#wrapper').css('float','right');
                    var l_width=$('.l-sidebar').width();
                    var w_width=$(window).width();
                    var width=w_width-l_width;
                    $('#contain_wrapper').css({'width':width,'float':'right'});
                    $('#wrapper').css('float','none');
                }
                else{
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
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
                    $(this).siblings('.slider').toggleClass('slider_click');
                    $(this).toggleClass('icon_afterclick');
                    $('.li_notifications').toggleClass('li_notification_afterclick');
                    icon_hover=false;
//                    $('.test').css({"width":"250px"});
//                  $('.close').toggleClass('close_afterclick');
                });
                if(icon_hover===true){
                    $('.icon').hover(function(){
                       $(this).toggleClass('icon_hover'); 
                    });
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