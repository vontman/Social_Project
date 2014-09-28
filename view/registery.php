
        <div class="registery-form">
    <form action="" method="post" class="signup">
      Name:<br/>
      <input type="text" placeholder="First" name="fname"  class="fname" />
    <input type="text" placeholder="Last" name="lname"  class="lname" /> <br />
     Username:<label class="user_msg"></label><br/>
     <input type="text"  name="username"  class="username" required />&nbsp;*<br/>
    Enter your email:<label class="exist"></label><br/>
    <input type="email" name="email" class="email" required id="email" />&nbsp;*<br/>
    Confirm your email:<label class="v_email"></label><br/>
    <input type="email"  name="reemail"  class="email" id="reemail" required/>&nbsp;*<br/>
    Enter your password:<label class="passlength"></label><br/>
    <input type="password"  name="password"  class="password" required id="pass"/>&nbsp;*<br/>
    Confirm your password:<label class="v_pass"></label><br/>
    <input type="password"  name="repassword"  class="password" id="repass" required/>&nbsp;*<br/>
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
        $date[]=@$_POST["year"];
            $date[]=@$_POST["month"];
    $date[]=@$_POST["day"];


$date_date= implode('-', $date);
    ?>
    </div>
    Gender:<br/><br/><div class="gender"><input type="radio" name="gender" value="m"class="male" checked>Male
        <input type="radio" name="gender"class="female" value="f">Female</div><br/>
    Mobile Phone:<br/>
    <input type="text" name="num" class="num"><br/>
    Location:<br/>
    <input type="text"name="location"  class="location" /><br/>
    <input type="submit" value="Sign up" name="signup" class="signupb" />OR
    <input type="submit" value="Login" name="login" class="loginb" />		
  </form>
</div>