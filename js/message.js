$(document).ready(function(){
            $('.message_fields').css('visibility','hidden'); 
                $('.message').click(function(){
                   $('.message_fields').append("<div class='m1'>vvvvvvvvvvvvvvvvv</div>");
                });
                $('.close').click(function(){
                 $('.message_field').css('visibility','hidden');
                });
 });