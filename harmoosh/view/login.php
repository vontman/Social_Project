        
<script>
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
                    $.ajax({url:'model/login.php',
                    type:'POST',
                    data:{username:login_username,password:login_password,remember:remember_me},
                    success:function(lol){
                        alert(lol);
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
</script>
        <div class="login">
            <img src="images/logo.png"><br>
            <label class="login_lable">Username</label> <label class="login_error login_username_error"></label><br>
            <input type="text" name="username" class="txtbox login_username">
            <label class="login_lable">Password</label> <label class="login_error login_password_error"></label><br>
            <input type="password" name="password" class="txtbox login_password">
            <input type="checkbox" name="remember" class="remember_me">  Remember me  <div class="forget">|Forgot my password </div> 
            <input type="submit"  name="login" value="login " class="login_submit">
            <h4> Not registered yet <div class="join">JOIN US NOW</div></h4>
        
        </div>