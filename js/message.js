$(document).ready(function(){
                $('.message').click(function(){                                      
                    var user_id2=$(this).attr('user');
                    $.ajax({url:'controller/message.php',
                    type:'get',
                  data:{user_id2:user_id2},
                  success: function (lol){
                     $('.message_fields').append(lol);  
                  }
                  });
                });
                $('.close').click(function(){
                });
 });