$(document).ready(function(){
    //  Comment Input expand and collapse
    var comment_input_toggle=false;
    var reply_input_toggle=false;
    $('.wrapper').delegate('.add_comment textarea','click',function(){
        $(this).css('height','60px');
        setTimeout(function(){comment_input_toggle=true;},500);
    });
    $('#contain_wrapper').click(function(){
        console.log('hi ');
        if(comment_input_toggle){
        console.log('hi !!!');
            $('#contain_wrapper .add_comment textarea').css('height','30px');
            comment_input_toggle=false;                           
        }           
        if(reply_input_toggle){
                console.log('O_O');
                $('.wrapper .comment_replies .add_comment').slideUp(200,function(){$('.wrapper .comment_replies .add_comment').remove();});
                
            }
    });
    $('.wrapper').delegate('.reply','click',function(){
        setTimeout(function(){reply_input_toggle=true;},500);
        var reply_input="<div class='add_comment' style='display:none'><textarea id='add_reply_input' placeholder='Write Reply Here ...' post_type='1'></textarea></div>";
        if(!$(this).parents('.post_comment ').children('.comment_replies').length){
            var replied_id=$(this).parents('.post_comment ').attr('post');
            var replies_div="<div class='comments comment_replies' replied='"+replied_id+"'></div>";
            $(this).parents('.post_comment ').append(replies_div);
        }
        $(reply_input).appendTo($(this).parents('.post_comment ').children('.comment_replies')).slideDown(400);
        $('.add_comment #add_reply_input').focus();
    });
    //  !!!!!!
    $('.wrapper').delegate('.add_comment textarea','keypress',function(key){
        if(key.which==13 && !key.shiftKey){
            key.preventDefault();
            if($(this).val().length>0){
                var comment_body=$(this).val();
                var comment_input=$(this);
                var post_type=$(this).attr('post_type');
                var post_id;
                var post_comments;
                // Check whether it is a comment for a post or a reply for a comment !!
                if(post_type==1){
                    
                    post_id=$(this).parent().parent().attr('replied');
                    post_comments=$(this).parent().parent();
                }else if(post_type==0){
                    post_id=$(this).parent().siblings('.post').attr('post');
                    post_comments=$(this).parent().siblings('.comments');
                }
                console.log(post_id+"   "+comment_body+"    "+post_type);
                $.ajax({url:'controller/add_comment.php',
                    data:{post_id:post_id,comment:comment_body,post_type:post_type},
                    success:function(comment){
                        if(comment){
                            comment_input.val('');
//                            post_comments.append(comment);
                            $(comment).appendTo(post_comments).slideDown(400);
                            // remove add reply textarea
                            if($('.wrapper .comment_replies .add_comment').length){
                                $('.wrapper .comment_replies .add_comment').slideUp(200,function(){$('.wrapper .comment_replies .add_comment').remove();});
                            }
                        }else{
                            alert('Error !!');
                        }
                    }
                });
            }
        }
    });
});


