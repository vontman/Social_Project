var add_post_toggle=false;
function addpost_toggle(){
        if(!add_post_toggle){
//            $('.add_post').hide(1000);
            $('.add_post').css('height','0');
            $('#add_post_toggle img').css('transform','translateX(-50%) rotateZ(180deg)');
            add_post_toggle=true;
        }else{
//            $('.add_post').show(1000);
            $('.add_post').css('height','auto');
            $('#add_post_toggle img').css('transform','translateX(-50%) rotateZ(0deg)');
            add_post_toggle=false;
        }
}
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
                        alert(add_post+'Post has been added !');
                    }else{
                        alert('Error !!');
                    }
                }
            });
        }
    });
});
$(window).scroll(function(){
    if($(window).scrollTop()>150){
        add_post_toggle=false;
        addpost_toggle();
    }else{
        $('.add_post').show(1000);
        add_post_toggle=true;
        addpost_toggle();
    }
});

