$(document).ready(function(){
            $('.message_fields').css('visibility','hidden'); 
                $('.message').click(function(){                                      
                    var user_id2=$(this).attr('user');
                    $(this).attr();
                    $.ajax({url:'view/message.php',
                    type:'get',
                  data:{user_id:user_id2},
                  success: function (lol){
                     $('.message_fields').append(lol);  
                  }
                  });
                });
                $('.close').click(function(){
                 $('.message_field').css('visibility','hidden');
                });
 });