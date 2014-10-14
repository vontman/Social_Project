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
                var post_id=$(this).parent().siblings('.post').attr('post');
                var post_comments=$(this).parent().siblings('.comments');
                var comment_body=$(this).val();
                var comment_input=$(this);
                console.log(post_id+"   "+comment_body+"    ");
                $.ajax({url:'controller/add_comment.php',
                    data:{post_id:post_id,comment:comment_body},
                    success:function(comment){
                        if(comment){
                            comment_input.val('');
                            post_comments.append(comment);
                        }else{
                            alert('Error !!');
                        }
                    }
                });
            }
        }
    });
});


