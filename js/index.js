
               var side_toggle=false;
                var zoom=false;
                var super_zoom=false;
            function r_sidebar_toggle(){
                    w_width=$(window).width();
                    var l_width=$('.l-sidebar .sidebar_wrapper').width();
//                    var r_width=$('.r-sidebar').width();
                    var w_width=$(window).width();
                    var width=w_width-l_width;
                if(super_zoom && side_toggle){
                    console.log('5');
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
                    $('.l-sidebar .sidebar_wrapper').css({"width":0,'min-width':0});
                    $('#toggle img').css('transform','rotateZ(0deg)');
                    $('#contain_wrapper').css({'padding-left':0});
                    $('.main_header').css({'min-width':'100%','right':0});
                    side_toggle=false;
                }else if(super_zoom && !side_toggle){
                    console.log('6');
                    $('.r-sidebar').css({"width":'0','min-width':'0'});
                    $('.l-sidebar .sidebar_wrapper').css({"width":0,'min-width':0});
//                    r_width=$('.r-sidebar').width();
                    $('#contain_wrapper').css({'padding-left':0});
                    $('#toggle img').css('transform','rotateZ(180deg)');
                    $('.main_header').css({'min-width':'100%','right':0});
                    side_toggle=true;
                }else if(!zoom && side_toggle){
                    console.log("1");
                    $('.l-sidebar .sidebar_wrapper').css({"width":'200','min-width':'20%'});
                    $('.r-sidebar').css({"width":0,'min-width':0});
//                    r_width=$('.r-sidebar').width();
//                    $('#wrapper').css('float','right');
//                    $('#contain_wrapper').css({'width':width,'float':'right'});
                    $('#toggle img').css('transform','rotateZ(180deg)');
//                    $('#wrapper').css({'float':'none','min-width':'80%'});
                    $('#contain_wrapper').css({'padding-left':l_width/2});
                    $('.main_header').css({'min-width':width,'right':0});
                    side_toggle=false;
                }else if(zoom && side_toggle){
                    console.log('2');
                    $('.r-sidebar').css({"width":'0','min-width':'0'});
                    $('.l-sidebar .sidebar_wrapper').css({"width":200,'min-width':'20%'});
//                    r_width=$('.r-sidebar').width();
                    $('#contain_wrapper').css({'padding-left':l_width/2});
                    $('#toggle img').css('transform','rotateZ(180deg)');
                    $('.main_header').css({'min-width':width,'right':0});
                    side_toggle=false;
                }else if(zoom && !side_toggle){
                    console.log('3');
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
                    $('.l-sidebar .sidebar_wrapper').css({"width":200,'min-width':'20%'});
                    $('#toggle img').css('transform','rotateZ(0deg)');
                    $('#contain_wrapper').css({'padding-left':l_width/2});
                    $('.main_header').css({'min-width':width,'right':0});
                    side_toggle=true;
                }else{
                    console.log('4');
                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
                    $('.l-sidebar .sidebar_wrapper').css({"width":200,'min-width':'20%'});
//                        r_width=$('.r-sidebar').width();
                        $('#contain_wrapper').css({'padding-left':35+"px"});
//                    setTimeout(function(){
//                        r_width=$('.r-sidebar').width();
//                        $('#contain_wrapper').css({'width':(w_width-l_width-r_width)+"px"});
//                        console.log('hamada');
//                    },1000);
//                    r_width=$('.r-sidebar').width();
//                    $('#wrapper').css({'float':'none','width':'560px','min-width':'0'});
//                    $('#contain_wrapper').css({'width':'auto','float':'none'});
                    $('#toggle img').css('transform','rotateZ(0deg)');
                    $('.main_header').css({'min-width':'65%','right':'15%'});
                    side_toggle=true;
                }
            }
            function auto_blend(){
                if($(window).width()<800){
                    side_toggle=false;
                    super_zoom=true;
                    zoom=false;
                    r_sidebar_toggle();
                }else if ($(window).width()<1050){
                    side_toggle=true;
                    super_zoom=false;
                    zoom=true;
                    r_sidebar_toggle();
                }else{
                    side_toggle=true;
                    super_zoom=false;
                    zoom=false;
                    r_sidebar_toggle();
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
                $('#toggle').click(function(){
                    r_sidebar_toggle();
//                        $('.r-sidebar .sidebar_wrapper').animate({width: 'hide',minWidth: 'hide',maxWidth: 'hide'},1000);
                });
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