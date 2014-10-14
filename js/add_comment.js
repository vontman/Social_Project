$(document).ready(function(){
    //  Comment Input expand and collapse
    var comment_input_toggle=false;
    $('.wrapper').delegate('#add_comment_input','click',function(){
        $(this).css('height','60px');
        setTimeout(function(){comment_input_toggle=true;},500);
    });
    $('#contain_wrapper').click(function(){
        console.log('hi ');
        if(comment_input_toggle){
        console.log('hi !!!');
            $('#contain_wrapper #add_comment_input').css('height','30px');
            comment_input_toggle=false;
        }
    });
    //  !!!!!!
    $('.wrapper').delegate('#add_comment_input','keypress',function(key){
        if(key.which==13 && !key.shiftKey){
            key.preventDefault();
            if($(this).val().length>0){
                var post_id=$(this).parents('.comments').siblings('.post').attr('post');
                var comment_body=$(this).val();
                var post_comments=$(this).parent('.comments');
                $.ajax({url:'controller/add_comment.php',
                    data:{post_id:post_id,comment:comment_body},
                    success:function(comment){
//                        if(comment){
                            post_comments.append(comment);
                            $(this).val('');
//                        }else{
//                            alert('Error !!');
//                        }
                    }
                });
            }
        }
    });
});


