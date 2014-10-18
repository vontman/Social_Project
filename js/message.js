
    function typing_append(){
//        var appended='<div class="msg_contain typing"><div class="to"><img src="user.png"/><span>. . .</span></div></div> ';
    }
    $(document).ready(function(){  
        ///////// TYPING !!!!
            var typing=0;
            var typing_timeout=setTimeout();
        $('.message_fields').delegate('.message_field .chat_input','keyup',function(){ 
            var user_id2=$(this).parents('.message_field').attr('user'); 
            if(typing==0){
                typing=1;
                $.ajax({url:'controller/chat.php',
                    data:{user_id2:user_id2,typing:typing},
                    success:function(lol){    
                        console.log('lol  '+lol);
                    }
                });
            }
            clearTimeout(typing_timeout);
            typing_timeout=setTimeout(function(){
                typing=0;
                var typing_remove=1;
                $.ajax({url:'controller/chat.php',
                    data:{user_id2:user_id2,typing_remove:typing_remove},
                    success:function(lol){
                        console.log('SHIT'+lol);
                    }
                });
            },2000);
        });
        /////////////////
        // disable skip line on keydown enter, and allowing shift+enter too skipline and enter to send :D
        $('.message_fields').delegate('.message_field .chat_input','keypress',function(key){
            if(key.which == 13 && !key.shiftKey) {
                key.preventDefault();
                // Dont send empty msgs !!
                if($(this).val().length>0){
                    var selected_chat=$(this);
                    var msg_body=$(this).val();
                    var selected_parent=$(this).parents('.message_field');
                    var recieved_id=$(this).parents('.message_field').attr('user');
                    console.log('msg sent to '+recieved_id);
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
            $(this).parent('.message_field').animate({
                top:"250px"
            },250,function(){
                $(this).remove();
            });
            clearInterval(chat_check_intervals[$(this).parent('.message_field').attr('user')]);
            chat_check_intervals.pop($(this).parent('.message_field').attr('user'));
            console.log("Closed !! :D ");
        });
    });
    // Fucntion to check new mgs !!
//        var check_interval_stop=false;
//      function check_new(){
//        selected_chat=$('.message_fields .messages .msgs .msg_contain:last-child');
//        var last_msg=selected_chat.attr('created');
//        var user_id=selected_chat.parents('.message_field').attr('user');
//        console.log(last_msg);
//        console.log(user_id);
//        var check_new_interval =setInterval(function(){
//            if(check_interval_stop){
//                clearInterval(check_new_interval);
//            }
//                $.ajax({url:'controller/chat.php',
//                    data:{last_created:last_msg,user_id:user_id},
//                    success:function(new_msgs){
//                        if(new_msgs){
//                            console.log('new !!');
//                            selected_chat.parents('.message_field').children('.messages').children('.msgs').append(new_msgs);
//                            selected_chat=$('.message_fields .messages .msgs .msg_contain:last-child');
//                            last_msg=selected_chat.attr('created');
//                            user_id=selected_chat.parents('.message_field').attr('user');
//                            selected_chat.parents('.messages').scrollTop(selected_chat.parents('.msgs').height());
//                        }else{
//                            console.log('no new >_<  '+last_msg + new_msgs);
//                        }
//                    }
//                });
//        },500);
//      }
      //!!!!
var chat_check_intervals=[];
$(document).ready(function(){
    var selected_chat;
    var typing_timeouts=[];
    // Add msg box !
    $('.message').click(function(){   
          // Check if chat window already exists !!
        var user_id2=$(this).attr('user');
        if($('.message_field[user='+user_id2+']').length){
            $('.message_field[user='+user_id2+'] .chat_close').trigger('click');
        }else{
            $.ajax({url:'controller/message.php',
          data:{user_id2:user_id2},
          success: function (chatbox){
              // add new chatbox with animation *_*
                $(chatbox).appendTo('.message_fields').animate({top:'0'},250);
               //chat auto scroll to last message
               var scroll=$('.msgs').height();
               $('.messages').scrollTop(scroll);
               $('.message_field .chat_input').focus();
                    var user2_typing=false;
    //           check_new();
            ////  !!!!! create new interval to check new messages !!!!!
                chat_check_intervals[user_id2]=setInterval(function(){
                    selected_chat=$('.message_fields .messages .msgs .to:last-child').parent('.msg_contain');
                    var last_msg=selected_chat.attr('created');
                    var user_id2=selected_chat.parents('.message_field').attr('user');
                    console.log(last_msg+'  user:'+user_id2);
                    $.ajax({url:'controller/chat.php',
                        data:{last_msg:last_msg,user_id2:user_id2},
                        success:function(new_msgs){
                            if(new_msgs){
                                if(new_msgs=='10'){
                                    console.log(user2_typing);
                                    if(!user2_typing){
                                        selected_chat.parents('.messages').children('.typing').slideDown('slow');
                                        user2_typing=true;
                                    }
                                    typing_timeouts[user_id2]=setTimeout(function(){
                                        user2_typing=false;
                                        console.log(user2_typing);
                                        selected_chat.parents('.messages').children('.typing').slideUp('slow');
                                    },2500);
                                    console.log('User is typing !!');
                                }else{
                                    if(selected_chat.parents('.messages').children('.typing').length){
                                        selected_chat.parents('.messages').children('.typing').slideUp('fast');
                                            clearTimeout(typing_timeouts[user_id2]);
                                    }
                                    console.log('new !! '+new_msgs+' from'+user_id2);
                                    selected_chat.parents('.message_field').children('.messages').children('.msgs').append(new_msgs);
//                                    selected_chat=$('.message_fields .messages .msgs .msg_contain:last-child');
//                                    last_msg=selected_chat.attr('created');
//                                    user_id2=selected_chat.parents('.message_field').attr('user');
                                    selected_chat.parents('.messages').scrollTop(selected_chat.parents('.msgs').height());
                                }
                            }else{
                                console.log('no new >_<  from'+user_id2);
                            }
                        }
                    });
               },700);
               //// !!!!!!!!
              }
          });
        }
    });
    // !!!
 });