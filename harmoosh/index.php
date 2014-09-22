
<html>
    <head>
        <meta charset="UTF-8">
        <title>union</title>
        <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script>
    $("document").ready(function(){
        $(".join").click(function(){
           $(".login").css("display","none");
           $(".signup").css("display","block");
    });
    $(".loginb").click(function(){
           $(".signup").css("display","none");
           $(".login").css("display","block");login
    });
    $('.email').on('keyup',function(){
         var data=$(this).val();
       $.ajax({url:'conn.php',
         data:{email:data},
         success: function (email_ch) {
                $('.exist').text(email_ch);
                 }     
});
     }) ;
             $('.username').on('keyup',function(){
                 var data2=$(this).val();
               $.ajax({url:'../.php',
                 data:{username:data2},
                 success: function (username_ch) {
                        $('.user_msg').text(username_ch);
                         }
        });
        }) ;
$('.password').on('keyup',function(){
                 var length = $('.password').val().length;
                 if (length<6) {
                     $('.passlength').text('password must be more than 6 cahr');  
            }
            });
     $('#reemail').on('keyup',function(){
    var email=$('#email').val();
     var reemail =$('#reemail').val();
     if (reemail!=email){
     $('.v_email').text('email does not match');
    }
    else{
        $('.v_email').text('email match');
    }
    });
     $('#repass').keyup(function(){
        var pass=$('#pass').val();
      var repass =$('#repass').val();
      if (repass!=pass){
      $('.v_pass').text('password does not match');
  }
  else{
       $('.v_pass').text('password match');
  }
 });
    });
    </script>
      <script>
    </script>
    </head>
    <body>
        <div class="welcome">
        <form action="" method="POST" class="login">
            <img src="images/logo.png">
            
            <label class="lab">Username<br></label>
            <input type="text" name="username" class="text">
            <label class="lab">Password<br></label>
            <input type="password" name="password" class="text">
            <input type="checkbox" name="remember" class="check">  Remember me  <div class="forget">|Forgot my password </div> 
            <input type="submit"  name="login" value="login " class="submit">
            <h4> Not registered yet <div class="join">JOIN US NOW</div></h4>
        
        </form>

        <div class="login-form">
    <form action="" method="post" class="signup">
      Name:<br/>
      <input type="text" placeholder="First" name="fname"  class="fname" />
    <input type="text" placeholder="Last" name="lname"  class="lname" /> <br />
     username:<br/>
     <input type="text"  name="username"  class="username" required />&nbsp;*<label class="user_msg"></label><br/>
    Enter your email:<br/>
    <input type="email" name="email" class="email" required id="email" />&nbsp;*<label class="exist"></label><br/>
    Confirm your email:<br/>
    <input type="email"  name="reemail"  class="email" id="reemail" required/>&nbsp;*<br /><label class="v_email"></label>
    Enter your password:<br/>
    <input type="password"  name="password"  class="password" required id="pass"/>&nbsp;*<br /><label class="passlength"></label>
    Confirm your password:<br/>
    <input type="password"  name="repassword"  class="password" id="repass" required/>&nbsp;*<br /><label class="v_pass"></label>
    Birthday:<div class="date"><select name="year">
            <?php for ($i = 1950; $i < 2012; $i++) {
                ?><option value="<?php echo $i;?>"><?php
     echo $i;
                ?></option><?php
}?>
        </select><select name="month">
            <?php for ($i = 1; $i < 13; $i++) {
                ?><option value="<?php echo $i;?>"><?php
                if($i<10){
                     echo '0'.$i;
                }
 else {
      echo $i;
 }
    
                ?></option><?php
}?>
        </select><select name="day">
            <?php for ($i = 1; $i < 32; $i++) {
                ?><option value="<?php echo $i;?>"><?php
    if($i<10){
                     echo '0'.$i;
                }
 else {
      echo $i;
 }
                ?></option><?php
}?>
        </select>
    <?php
    $date[]=@$_POST["day"];
    $date[]=@$_POST["month"];
    $date[]=@$_POST["year"];
$date_date= implode('-', $date);
    ?>
    </div>
    Gender:<br/><br/><div class="gender"><input type="radio" name="gender" value="male"class="male" checked>Male
        <input type="radio" name="gender"class="female" value="female">Female</div><br/>
    Mobile Phone:<br/>
    <input type="text" name="num" class="num"><br/>
    Location:<br/>
    <input type="text"name="location"  class="location" /><br/>
    <input type="submit" value="Sign up" name="signup" class="signupb" />OR
    <input type="submit" value="Login" name="login" class="loginb" />		
  </form>
</div>
            </div>
    </body>
</html>
