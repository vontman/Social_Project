$(document).ready(function(){
            $('.message_fields').css('visibility','hidden'); 
                $('.message').click(function(){                                      
                    var user_id=$(this).attr('user');
                    $(this).attr();
                    $.ajax({url:'model/message.php',
                    type:'POST',
                  data:{user_id:user_id},
                  success: function (lol){
                     $('.message_fields').append(lol);  
                  }
                  });
                });
                $('.close').click(function(){
                 $('.message_field').css('visibility','hidden');
                });
 });