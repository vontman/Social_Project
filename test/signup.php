
<html>
<head> 
<script type="text/javascript" src="jquery-1.11.0.js"></script>
<script type="text/javascript" src="jquery-ui-1.10.4.custom.js"></script>
       <script>
    $("document").ready(function(){
         alert("Join us for free");
/*-----------------------------------------------------------------------------------------------*/  
      $('.email').on('keyup',function(){
         var data=$(this).val();
       $.ajax({url:'conn.php',
         data:{email:data},
         success: function (email_ch) {
                        $('.ali').text(email_ch);
                         }
        
     });
     }) ;
   

/*--------------------------------------------------------------------------------------------------------*/
    });
    </script>
</head>
    <body>
<div class="login-form">
    <form action="" method="post" enctype="multipart/form-data" class="reg_form">
      Name:<br/>
    <input type="text" placeholder="First" name="fname"  class="fname" />
    <input type="text" placeholder="Last" name="lname"  class="lname" /> <br />
    Enter your email:<br/>
    <input type="email" name="email" class="email" id="reg" required/>&nbsp;*<label class="ali"></label><br/>
    Confirm your email:<br/>
    <input type="email"  name="reemail"  class="email" id="reg" required/>&nbsp;*<br />
    Enter your password:<br/>
    <input type="password"  name="password"  class="password" id="reg" required/>&nbsp;*<br />
    Confirm your password:<br/>
    <input type="password"  name="repassword"  class="password" id="reg" required/>&nbsp;*<br />
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
    <input type="submit" value="Sign up" name="signup" class="signup" />OR
    <input type="submit" value="Login" name="login" class="login" />		
  </form>
</div>
        </body>
</html>


<?php
if(isset($_POST['login'])){
    print_r($date_date);
}
?>