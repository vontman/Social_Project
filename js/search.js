   $(document).ready(function(){
        console.log('hi');
//       $('#search_input').keypress(function(key){
//           if(key.which==13){
//               alert($(this).val());
//           }
//       });
        $('#search_result_wrapper').hide();
        var srch_click=false;
        $('#search_input_img').click(function(){
            if(!srch_click){
                $('#search_input_img img').css('box-shadow','0');
                $('#search_input').css('width','240px');
                $('#search_input').css('padding','4px 8px 4px 32px');
                $('#search_input').focus();
                $('#search_input_img img').css('transform','rotate(360deg)');
                srch_click=true;
            }else{
                $('#search_input').css('padding','0');
                $('#search_input').css('width','30px');
                $('#search_input_img img').css('transform','rotate(-360deg)');
                srch_click=false;
            }
        });
        $i=0;
        $('#search_input').keyup(function(){
            $('#search_result_wrapper table').children().children('tr').remove();
            if($(this).val().length>2){
                var keywords=$(this).val();
               $.ajax({url:'model/search.php',
                   data:{keywords:keywords},
                   success:function(srch_results){
                        if(srch_results){
                            $('#search_result_wrapper table').append(srch_results);
                            if($i==0){
                                $('#search_result_wrapper').slideDown('fast');
                            }
                            $i++;
                        }else{
                            $i=0;
                       }
                   }
               });
            }
        });
//        if($('#search_result_wrapper table .add_friend').length){
//            console.log('shit');
            $('#search_result_wrapper').delegate('.add_friend','click',function(){
                console.log('test');
                var friend_id=$(this).attr('user');
                var selected_div=$(this);
                console.log(friend_id+'asdasd');
               $.ajax({url:'model/search.php',
                    data:{friend_id:friend_id},
                    success:function(addfriend){
                        if(addfriend){
                            selected_div.text('Request Send');
                        }else{
                            selected_div.text('Request Failed');
                        }
                    }
                });
            });
//        }
    });
