        
<script>
    $(document).ready(function(){
        var login_valid=false;
        $('.login_username').keyup(function(){
           if($(this).val().length<6&&$(this).val().length!=0){
               $('.login_username_error').text("User name is too short")
               login_valid=false;
           }else{
               $('.login_username_error').text("");
               login_valid=true;
           }
        });
        $('.login_password').keyup(function(){
           if($(this).val().length<6&&$(this).val().length!=0){
               $('.login_password_error').text("Password is too short")
               login_valid=false;
           }else{
               $('.login_password_error').text("");
               login_valid=true;
           }
        });
        $('.login_submit').click(function(){
            if(login_valid){
                var login_username=$('.login_username').val();
                var login_password=$('.login_password').val();
                $.ajax(url:'login.php',
                data:{username:login_username,password:login_password},
                success:function(lol){
                });
            }else{
                
            }
        });
    });
</script>
        <form action="" method="POST" class="login">
            <img src="images/logo.png"><br>
            <label class="login_lable">Username</label> <label class="login_error login_username_error"></label><br>
            <input type="text" name="username" class="txtbox login_username">
            <label class="login_lable">Password</label> <label class="login_error login_password_error"></label><br>
            <input type="password" name="password" class="txtbox login_password">
            <input type="checkbox" name="remember" class="check">  Remember me  <div class="forget">|Forgot my password </div> 
            <input type="submit"  name="login" value="login " class="login_submit">
            <h4> Not registered yet <div class="join">JOIN US NOW</div></h4>
        
        </form>