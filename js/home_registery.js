        $("document").ready(function(){
        //Sign Up!!
        $(".loginb").click(function(){
           $(".signup").css("display","none");
           $(".login").css("display","block");
    });
    $('#email').on('keyup',function(){
         var email=$(this).val();
       $.ajax({url:'model/home_signup.php',
           type:'POST',
         data:{email:email},
         success: function (email_ch) {
               if(!email_ch){
                            $('.exist').text('email already exist'); 
                            $('.exist').css('color','red');
                        }
                        else{
                            $('.exist').text('available'); 
                            $('.exist').css('color','green');
                        }
                 }     
});
     }) ;
             $('.username').on('keyup',function(){
                 var username=$(this).val();
                 var length = $('.username').val().length;
                 if (length<6) {
                     $('.user_msg').text('password must be more than 6 cahr');  
                     length=false;
            }
            else{
                 $('.user_msg').text('');
               length=true;
               $.ajax({url:'model/home_signup.php',
                   type:'POST',
                 data:{username:username},
                 success: function (username_ch) {
                        if(!username_ch){
                            $('.user_msg').text('username already exist'); 
                            $('.user_msg').css('color','red');
                        }
                        else{
                            $('.user_msg').text('available'); 
                            $('.user_msg').css('color','green');
                        }
                         }
        });
            }  
        }) ;
$('.password').on('keyup',function(){
                 var length = $('.password').val().length;
                 if (length<6) {
                     $('.passlength').text('password must be more than 6 cahr');  
                     length=false;
            }
            else{
                 $('.passlength').text('');
               length=true;
            }
            });
     $('#reemail').on('keyup',function(){
    var email=$('#email').val();
     var reemail =$('#reemail').val();
     if (reemail!==email){
     $('.v_email').text('email does not match');
     $('.v_email').css('color','red');
    }
    else{
        $('.v_email').text('email match');
        $('.v_email').css('color','green');
    }
    });
     $('#repass').keyup(function(){
        var pass=$('#pass').val();
      var repass =$('#repass').val();
      if (repass!==pass){
      $('.v_pass').text('password does not match');
      $('.v_pass').css('color','red');
  }
  else{
       $('.v_pass').text('password match');
        $('.v_pass').css('color','green');
  }
        });
        $('.signupb').click(function(){
            if($('.v_pass').text('password match')&&$('.v_email').text('email match')){;
                var username=$('.username').val();
                var pass=$('#pass').val();
                 var email=$('#email').val();
//                var fname=$('.fname').val();
//                var lname=$('.lname').val();
//                var date=$('.date').val();
//                var gender=$('.gender').val();
//                var num=$('.num').val();
//                var country=$('.location').val();
//                fname:fname,lname:lname,date:date,gender:gender,num:num,location:country
                $.ajax({url:'model/home_signup.php',
                    type:'POST',
                    data:{username:username,password:pass,email:email},
                    success:function(signup){
                        if(signup){
                            alert('Registeration Successfull !!');
                            console.log('good job');
                            location.reload();
                        }else{
                            alert('Registeration faled !');
                            $('.registery-form').children().val('');
                        }
                    }
                });
        
            }
            else{
                 alert('There Are Something Wrong');
            }
        });
    }); 