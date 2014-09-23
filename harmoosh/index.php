
<html>
    <head>
        <meta charset="UTF-8">
        <title>union</title>
        <script type="text/javascript" src="js/jquery-1.11.0.js"></script>
        <link href="view/style.css" rel="stylesheet" type="text/css">
        <script>
    $("document").ready(function(){
        //Sign Up!!
        $(".join").click(function(){
           $(".login").css("display","none");
           $(".signup").css("display","block");
    });
    $(".loginb").click(function(){
           $(".signup").css("display","none");
           $(".login").css("display","block");
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
               $.ajax({url:'conn.php',
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
            <?php
                include_once './view/login.php';
                include_once './view/registery.php';
            ?>

            </div>
    </body>
</html>
