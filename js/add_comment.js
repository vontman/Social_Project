$(document).ready(function(){
    //  Comment Input expand and collapse
    var comment_input_toggle=false;
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
                            alert(comment);
                            comment_input.val('');
//                            post_comments.append(comment);
                            $(comment).appendTo(post_comments).slideDown(400);
                            if($('.wrapper .comment_replies .add_comment').length){
                                $('.wrapper .comment_replies .add_comment').slideUp(200);
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


