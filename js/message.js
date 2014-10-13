

    $(document).ready(function(){
        // disable skip line on keydown enter, and allowing shift+enter too skipline and enter to send :D
        $('.message_fields').delegate('.message_field .chat_input','keypress',function(key){
            if(key.which == 13 && !key.shiftKey) {
                key.preventDefault();
                console.log('no comment');
                // Dont send empty msgs !!
                if($(this).val().length>0){
                    var selected_chat=$(this);
                    var msg_body=$(this).val();
                    var selected_parent=$(this).parents('.message_field');
                    var recieved_id=$(this).parents('.message_field').attr('user');
                    console.log('no comment');
                    // Send body and recieved  id to php and then to DB !!
                    $.ajax({url:'controller/chat.php',
                        data:{msg_body:msg_body,recieved_id:recieved_id},
                        success:function(sent){
                            if(sent){
                                selected_chat.val('');
                                selected_parent.children('.messages').children('.msgs').append(sent);
                                //chat auto scroll to last message
                                selected_parent.children('.messages').scrollTop(selected_parent.children('.messages').children('.msgs').height());
                            }else{
                                alert("Error : Message not sent !");
                            }
                        }
                    });
                }//  !!!!!!!!!!!!
            }
            
        });
        // Remove Chat window !
        $('.message_fields').delegate('.message_field .chat_close','click',function(){
            $(this).parent('.message_field').remove();
              check_interval_stop=true;
            console.log("okasodkaposjd");
        });
    });
    // Fucntion to check new mgs !!
        var check_interval_stop=false;
      function check_new(){
        selected_chat=$('.message_fields .messages .msgs .msg_contain:last-child');
        var last_msg=selected_chat.attr('created');
        var user_id=selected_chat.parents('.message_field').attr('user');
        console.log(last_msg);
        console.log(user_id);
        var check_new_interval =setInterval(function(){
            if(check_interval_stop){
                clearInterval(check_new_interval);
            }
                $.ajax({url:'controller/chat.php',
                    data:{last_created:last_msg,user_id:user_id},
                    success:function(new_msgs){
                        if(new_msgs){
                            console.log('new !!');
                            selected_chat.parents('.message_field').children('.messages').children('.msgs').append(new_msgs);
                            selected_chat=$('.message_fields .messages .msgs .msg_contain:last-child');
                            last_msg=selected_chat.attr('created');
                            user_id=selected_chat.parents('.message_field').attr('user');
                        }else{
                            console.log('no new >_<  '+last_msg + new_msgs);
                        }
                    }
                });
        },500);
      }
      //!!!!

$(document).ready(function(){
    var selected_chat;
    // Add msg box !
    $('.message').click(function(){   
        var user_id2=$(this).attr('user');
        $.ajax({url:'controller/message.php',
        type:'get',
      data:{user_id2:user_id2},
      success: function (lol){
          // Check if chat window already exists !!
          if($('.message_field[user='+user_id2+']').length>0){
              $('.message_field[user='+user_id2+']').remove();
              check_interval_stop=true;
          }else{
            $('.message_fields').append(lol); 
           //chat auto scroll to last message
           var scroll=$('.msgs').height();
           $('.messages').scrollTop(scroll);
           $('.message_field .chat_input').focus();
//           selected_chat=$('.message_fields').children('.messages').children('.msgs').children('div:last-child');
           check_new();
          }
        }
      });
    });
    // !!!
 });