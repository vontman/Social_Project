$(document).ready(function(){
            $('.message_fields').css('visibility','hidden'); 
                $('.message').click(function(){
                   $('.m1').css('visibility','visible');
    //               $('.message_field').append('.message_field');
//                   if('.m1'){
//                       $('.m2').css('visibility','visable');
//                      $('.message_fields').append('.m2');
//                   }
//                   else{
//                       $('.m1').css('visibility','visable');
//                   
//                   }
                });
                $('.close').click(function(){
                 $('.message_field').css('visibility','hidden');
                });
 });