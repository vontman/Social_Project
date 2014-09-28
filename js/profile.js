//            function auto_blend(){
//                if($(window).width()<1200){
//                    $('.r-sidebar').css({"width":'0','min-width':'0'});
//                    $('.wrapper').css('float','right');
//                    var l_width=$('.l-sidebar').width();
//                    var w_width=$(window).width();
//                    var width=w_width-l_width;
//                    $('.contain_wrapper,.header').css({'width':width,'float':'right'});
//                    $('.wrapper').css('float','none');
//                    $('.detail').css({'width':width,'float':'right'});
//                    $('.message_field').css({'width':'21%','height':'100%'});
//                    $('.message_fields').css({'width':'88.8%','height':'45%','right':'5.5%'});
//                }
//                else{
//                    $('.r-sidebar').css({"width":'175px','min-width':'15%'});
//                    $('.wrapper').css('float','none');
//                    $('.contain_wrapper').css({'width':'84.9%','float':'none'});
//                    $('.header').css({'width':'84.8%','float':'none'});
//                    $('.detail').css({'width':'84.8%','float':'none'});
//                    $('.message_field').css({'width':'21%','height':'100%'});
//                    $('.message_fields').css({'width':'83.8%','height':'44%','right':'auto'});
//                }
//            }
//            $(window).resize(function(){
//                auto_blend();
//            });
//            $(document).ready(function(){
//                auto_blend();
//                var icon_hover = true;
//                $('.icon').click(function(){
//                    $(this).siblings('.slider').toggleClass('slider_click');
//                    $(this).toggleClass('icon_afterclick');
//                    $('.li_notifications').toggleClass('li_notification_afterclick');
//                    icon_hover=false;
//                });
//                if(icon_hover===true){
//                    $('.icon').hover(function(){
//                       $(this).toggleClass('icon_hover'); 
//                    });
//                } 
//            });