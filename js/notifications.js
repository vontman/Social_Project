$(document).ready(function(){
   $('.leftslider').delegate( ".friend_request_btns .accept", "click", function() {
       var user_id=$(this).parent('.friend_request_btns').attr('user');
       var selected_btn=$(this);
       var request_id=$(this).parent().attr('request_id');
       $.ajax({url:'model/friend_request.php',
       data:{user_id_accepted:user_id,request_id:request_id},
       success:function(result){
           if(result){
               selected_btn.val('Added');
               selected_btn.css('background','#5A45C7');
           }else{
               selected_btn.val('failed');
           }
       }
      });
   }); 
   $('.leftslider').delegate( ".friend_request_btns .ignore", "click", function() {
       var user_id=$(this).parent('.friend_request_btns').attr('user');
       var selected_btn=$(this);
       var request_id=$(this).parent().attr('request_id');
       $.ajax({url:'model/friend_request.php',
       data:{user_id_ignored:user_id,request_id:request_id},
       success:function(result){
           if(result){
               selected_btn.val('Ignored');
               selected_btn.css('background','#5A45C7');
           }else{
               selected_btn.val('failed');
           }
       }
      });
   }); 
});
