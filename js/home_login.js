    $(document).ready(function(){
        console.log("lol");
        var username_valid=false;
        var password_valid=false;
        $('.login_username').keyup(function(){
           if($(this).val().length<6){
               $('.login_username_error').text("User name is too short")
               username_valid=false;
           }else{
               $('.login_username_error').text("");
               username_valid=true;
           }
        });
        $('.login_password').keyup(function(){
           if($(this).val().length<6){
               $('.login_password_error').text("Password is too short")
               password_valid=false;
           }else{
               $('.login_password_error').text("");
               password_valid=true;
           }
        });
        $('.login_submit').click(function(){
            console.log("hamada");
            if(password_valid&&username_valid){
                console.log("el3ab");
                var login_username=$('.login_username').val();
                var login_password=$('.login_password').val();
                var remember_me = false;
                console.log("el3ab");
                if($('.remember_me').is(':checked')){
                    remember_me=true;
                }else{
                    remember_me=false;
                }
                if(!login_username.length<6&&!login_password<6){
                    console.log("el3ab");
                    $.ajax({url:'model/home_login.php',
                    type:'POST',
                    data:{username:login_username,password:login_password,remember:remember_me},
                    success:function(lol){
                        if(lol){
                            alert('Login Successful !');
                            location.reload();
//                            $('.welcome').slideUp(1500);
//                            setTimeout(function(){
//                                $('.welcome').prepend();
//                                $('body').load('view/l_sidebar.php');
//                                $('body').append('<div id="contain_wrapper" class="contain_wrapper"></div>');
//                                $('#contain_wrapper').append('<div id="wrapper" class="wrapper"></div>');
//                                $('#wrapper').load('view/wrapper.php',1500);
//                                $('body').load('view/r_sidebar.php',1500);
//                            },1500);
                        }else{
                            alert("Username and Password don't match !!");
                            $('.login_username').val('');
                            $('.login_password').val('');
                        }
                    console.log("el3ab");
                        }
                    });
                }else{
                    alert("Check the errors!!!");
                }
            }else{
                alert("Check the errors!!!");
            }
        });
               $(".join").click(function(){
           $(".login").css("display","none");
           $(".signup").css("display","block");
    });
    });