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
});


