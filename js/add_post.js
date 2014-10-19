//  Add_post dissappear and reappear function !!!
var add_post_toggle=false;
function addpost_toggle(){
        if(!add_post_toggle){
//            $('.add_post').hide(1000);
            $('.add_post').css('height','0');
            $('#add_post_toggle img').css('transform','translateX(-50%) rotateZ(180deg)');
            add_post_toggle=true;
        }else{
//            $('.add_post').show(1000);
            $('.add_post').css('height','180px');
            $('#add_post_toggle img').css('transform','translateX(-50%) rotateZ(0deg)');
            add_post_toggle=false;
        }
}
//   add_post in header disappear on scroll !!
$(window).scroll(function(){
    if($(window).scrollTop()>50){
        add_post_toggle=false;
        addpost_toggle();
    }else{
        $('.add_post').show(1000);
        add_post_toggle=true;
        addpost_toggle();
    }
});
//   !!!!!
$(document).ready(function(){
    $('#add_post_toggle').click(function(){
        addpost_toggle();
    });
    $('#add_post_sbmt').click(function(){
        var post_body=$('#add_post_body').val();
        var post_length=post_body.length;
        var post_permission=$('#permission_select').val();
//        var post_image=$('#add_post_image').val();
        if(post_length<4){
            alert('The post is too short !');
        }else{
            $.ajax({url:'controller/add_post.php',
                data:{post_body:post_body,post_permission:post_permission},
                success:function(add_post){
                    if(add_post){
                        addpost_toggle();
                        $(add_post).prependTo('.wrapper').fadeIn(1500);
                    }else{
                        alert('Error !!');
                    }
                }
            });
        }
    });
    $('.wrapper').delegate('.post_whole .like_post','click',function(){
        var post_parent=$(this).parents('.post_functions');
        var post_id=$(this).parent().parent().attr('post');
        var post_type=$(this).attr('type');
        $.ajax({url:'controller/add_post.php',
            data:{post_id:post_id,post_type:post_type},
            success:function(lol){
                alert(lol);
            }
        });
    });
});

