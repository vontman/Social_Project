var side_toggle=false;
                var zoom=false;
            function r_sidebar_toggle(){
                if(side_toggle){
                    $('.r-sidebar').css({"width":'0','min-width':'0'});
                    $('#wrapper').css('float','right');
                    var l_width=$('.l-sidebar').width();
                    var w_width=$(window).width();
                    var width=w_width-l_width;
                    $('#contain_wrapper').css({'width':width,'float':'right'});
                    $('#wrapper').css({'float':'none','min-width':'75%'});
                    $('#toggle img').css('transform','rotateZ(180deg)');
                    side_toggle=false;
                }else if(zoom && side_toggle){
                    $('.r-sidebar').css({"width":'0','min-width':'0'});
                    $('#toggle img').css('transform','rotateZ(180deg)');
                    side_toggle=false;
                }else if(zoom && !side_toggle){
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
                    $('#toggle img').css('transform','rotateZ(0deg)');
                    side_toggle=true;
                }else{
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
                    $('#wrapper').css({'float':'none','width':'560px','min-width':'0'});
                    $('#contain_wrapper').css({'width':'auto','float':'none'});
                    $('#toggle img').css('transform','rotateZ(0deg)');
                    side_toggle=true;
                }
            }
            function auto_blend(){
                if($(window).width()<980){
                    side_toggle=true;
                    r_sidebar_toggle();
                    zoom=true;
                }
                else{
                    side_toggle=false;
                    r_sidebar_toggle();
                    zoom=false;
                }
            }
            function sidetoggle_zoom(){
                if (!zoom && !side_toggle){
                    r_sidebar_toggle();
                }
            }
            $(window).resize(function(){
                auto_blend();
                sidetoggle_zoom();
            });
            
            $(document).ready(function(){
                auto_blend();
                sidetoggle_zoom();
//                $('.icon').draggable({axis:'y'},function(){
//                    $('.icon').addClass('icon_drag');
//                });
                var icon_hover = true;
                $('#toggle').click(function(){r_sidebar_toggle()});
                $('.icon').click(function(){
                console.log('????');
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