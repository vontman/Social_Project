
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
    });
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

        <div class="signup">
            <form action="" method="post" enctype="multipart/form-data" class="form">
      Name:<br/>
    <input type="text" placeholder="First" name="fname"  class="fname" />
    <input type="text" placeholder="Last" name="lname"  class="lname" /> <br />
    Enter your email:<br/>
    <input type="email" name="email" class="email" />&nbsp;*<br />
    Confirm your email:<br/>
    <input type="email"  name="reemail"  class="email" />&nbsp;*<br />
    Enter your password:<br/>
    <input type="password"  name="password"  class="password" />&nbsp;*<br />
    Confirm your password:<br/>
    <input type="password"  name="repassword"  class="password" />&nbsp;*<br />
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
  
    </div>
    Gender:<br/><br/><div class="gender"><input type="radio" name="gender" value="male"class="male" checked>Male
        <input type="radio" name="gender"class="female" value="female">Female</div><br/>
    Mobile Phone:<br/>
    <input type="text" name="num" class="num"><br/>
    Location:<br/>
    <input type="text"name="location"  class="location" /><br/>
    <input type="submit" value="Sign up" name="signup" class="signupb" />
    <input type="submit" value="Login" name="login" class="loginb" />		
  </form>
</div>
            </div>
    </body>
</html>
