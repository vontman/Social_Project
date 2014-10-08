//chat auto scroll to last message

    $(document).ready(function(){
        $('.message_field').delegate('.chat_input','keypress',function(key){
            if(key.which == 13) {
                alert('You pressed enter!');
            }
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
        $('.chat_input').keypress(function(key){
            if(key.which == 13) {
                alert('You pressed enter!');
            }
        }); 
      }
      });
    });
    $('.close').click(function(){
    });
 });