        $("document").ready(function(){
        //Sign Up!!
        $(".loginb").click(function(){
           $(".signup").css("display","none");
           $(".login").css("display","block");
    });
    var $email_check=false;
    var password_check=false;
    var $email_check2=false;
     length_pass=false;
     length_user=false;
    $('#email').on('keyup',function(){
         var email=$(this).val();
         var email_1 = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
         if(!($('#email').val().match(email_1))){
             $('.exist').text('wrong email'); 
             $('.exist').css('color','red');
         }
         else{
       $.ajax({url:'model/home_signup.php',
           type:'POST',
         data:{email:email},
         success: function (email_ch) {
               if(!email_ch){
                            $('.exist').text('email already exist'); 
                            $('.exist').css('color','red');
                            $email_check=false;
                        }
                        else{
                            $('.exist').text('available'); 
                            $('.exist').css('color','green');
                            $email_check=true;
                        }
                 }     
});
         }
     }) ;
          $('#reemail').on('keyup',function(){
                                var email=$('#email').val();
                                 var reemail =$('#reemail').val();
                                 if (reemail!==email){
                                 $('.v_email').text('email does not match');
                                 $('.v_email').css('color','red');
                                 $email_check2=false;
                                }
                                else{
                                    if($email_check){
                                    $('.v_email').text('email match');
                                    $('.v_email').css('color','green');
                                    $email_check2=true;
                                }
                            }
                                });
             $('.username').on('keyup',function(){
                 var username=$(this).val();
                      var length_user = $('.username').val().length;
                 if (length_user<6) {
                     $('.user_msg').text('username must be more than 6 cahr');  
                     length_user=false;
            }
            else{
                 $('.user_msg').text('');
               length_user=true;
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
         var length_pass = $('.password').val().length;
                 if (length_pass<6) {
                     $('.passlength').text('password must be more than 6 cahr');  
                     length_pass=false;
            }
            else{
                 $('.passlength').text('');
               length_pass=true;
            }
            });
     $('#repass').keyup(function(){
        var pass=$('#pass').val();
      var repass =$('#repass').val();
      if (repass!==pass){
      $('.v_pass').text('password does not match');
      $('.v_pass').css('color','red');
      password_check=false;
  }
  else{
       $('.v_pass').text('password match');
        $('.v_pass').css('color','green');
        password_check=true;
  }
        });
        $('.signupb').click(function(){
            if(password_check && $email_check2 && length_pass && length_user){
                var username=$('.username').val();
                var pass=$('#pass').val();
                 var email=$('#email').val();
                var fname=$('.fname').val();
                var lname=$('.lname').val();
//                var date=$('.date').val();
               var gender=$('.gender').val();
                var num=$('.num').val();
//                var country=$('.location').val();
//                date:date,location:country
                $.ajax({url:'model/home_signup.php',
                    type:'POST',
                    data:{username:username,password:pass,email:email,fname:fname,lname:lname,gender:gender,num:num},
                    success:function(signup){
                        if(signup){
                            alert('Registeration Successfull !!');
                            console.log('good job');
//                            location.reload();
                        }else{
                            alert('Registeration faled !');
                            $('.registery-form').children().val('');
                        }
                    }
                });
        
            }
            else{
                 alert('There is Something Wrong');
            }
        });
    }); 