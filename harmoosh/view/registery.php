<head>
    <script>
        $("document").ready(function(){
        //Sign Up!!
        $(".loginb").click(function(){
           $(".signup").css("display","none");
           $(".login").css("display","block");
    });
    $('#email').on('keyup',function(){
         var email=$(this).val();
       $.ajax({url:'model/signup.php',
           type:'POST',
         data:{email:email},
         success: function (email_ch) {
                $('.exist').text(email_ch);
                 }     
});
     }) ;
             $('.username').on('keyup',function(){
                 var username=$(this).val();
               $.ajax({url:'model/signup.php',
                   type:'POST',
                 data:{username:username},
                 success: function (username_ch) {
                        $('.user_msg').text(username_ch);
                         }
        });
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
     if (reemail!=email){
     $('.v_email').text('email does not match');
     email_value=false;
    }
    else{
        $('.v_email').text('email match');
        email_value=true;
    }
    });
     $('#repass').keyup(function(){
        var pass=$('#pass').val();
      var repass =$('#repass').val();
      if (repass!=pass){
      $('.v_pass').text('password does not match');
      pass_value=false;
  }
  else{
       $('.v_pass').text('password match');
        pass_value=true;
  }
        });
        $('.signupb').click(function(){
            if(email_value&&pass_value&&length){;
                var username=$('.username').val();
                var pass=$('#pass').val();
                 var email=$('#email').val();
                var fname=$('.fname').val();
                var lname=$('.lname').val();
                var date=$('.date').val();
                var gender=$('.gender').val();
                var num=$('.num').val();
                var location=$('.location').val();
                $.ajax({url:'model/signup.php',
                type:'POST',
                data:{username:username,password:pass,email:email,fname:fname,lname:lname,date:date,gender:gender,num:num,location:location}
                });
        
        }
        });
    }); 
    </script>
</head>
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