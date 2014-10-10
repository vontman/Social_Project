//chat auto scroll to last message

    $(document).ready(function(){
        // disable skip line on keydown enter, and allowing shift+enter too skipline :D
        $('.message_fields').delegate('.message_field .chat_input','keypress',function(key){
            if(key.which == 13 && !key.shiftKey) {
                key.preventDefault();
            }
        });
        // Remove Chat window !
        $('.message_fields').delegate('.message_field .chat_close','click',function(){
            $(this).parent('.message_field').remove();
            console.log("okasodkaposjd");
        });
    });


$(document).ready(function(){
    $('.message').click(function(){                                      
        var user_id2=$(this).attr('user');
        $.ajax({url:'controller/message.php',
        type:'get',
      data:{user_id2:user_id2},
      success: function (lol){
         $('.message_fields').append(lol); 
        var scroll=$('.msgs').height();
        $('.messages').scrollTop(scroll);
      }
      });
    });
 });