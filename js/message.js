//chat auto scroll to last message

    $(document).ready(function(){
        // disable skip line on keydown enter, and allowing shift+enter too skipline :D
        $('.message_fields').delegate('.message_field .chat_input','keypress',function(key){
            if(key.which == 13 && !key.shiftKey) {
                key.preventDefault();
                console.log('no comment');
                var selected_chat=$(this);
                var msg_body=$(this).val();
                var selected_parent=$(this).parents('.message_field');
                var recieved_id=$(this).parents('.message_field').attr('user');
                console.log('no comment');
                $.ajax({url:'controller/chat.php',
                    data:{msg_body:msg_body,recieved_id:recieved_id},
                    success:function(sent){
                            if(sent){
                                selected_chat.val('');
                                selected_parent.children('.messages').children('.msgs').append(sent);
                                selected_parent.children('.messages').scrollTop(selected_parent.children('.messages').children('.msgs').height());
                            }else{
                                alert("Error : Message not sent !");
                            }
                    }
                });
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
        $('.message_field .chat_input').focus();
      }
      });
    });
 });