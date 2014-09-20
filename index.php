
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src='datetimepicker/DateTimePicker.js'></script>
        <script>
            $(document).ready(function(){
                var icon_hover = true;
                $('.icon').click(function(){
                    leftslider();
//                    $('.test').css({"width":"250px"});
//                  $('.close').toggleClass('close_afterclick');
                });
                if(icon_hover===true){
                    $('.icon').hover(function(){
                       $('.icon').toggleClass('icon_hover'); 
                    });
                }
                function leftslider(){
                    $('.leftslider').toggleClass('leftslider_click');
                    $('.icon').toggleClass('icon_afterclick');
                    $('.li_notifications').toggleClass('li_notification_afterclick');
                    icon_hover=false;
                }
//                $('.icon').hover(function(){
//                    var newleft =$('.icon').position().left +45;
//                   $('.icon').css('left',newleft+'px'); 
//                },function(){
//                    var newleft =$('.icon').position().left -45;
//                   $('.icon').css('left',newleft+'px'); 
//                        });
//                $('.close').click(function(){
////                    $('.test').css({"width":"10px","background":"blue"});
//                    $('.test').toggleClass('color');
//                });
                $("#datepicker").datepicker({
                    dateFormat: 'dd-mm-yy'
                });
            });
        </script>
        <link type='text/css' rel='stylesheet' href='style.css'/>
        <link type='text/css' rel='stylesheet' href='sidebar.css'/>
        <link type='text/css' rel='stylesheet' href='wrapper.css'/>
        <link type='text/css' rel='stylesheet' href='js/js/jquery-ui.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.min.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.structure.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.theme.css'/>
        <link type='text/css' rel='stylesheet' href='datetimepicker/DateTimePicker.css'/>
        
    </head>
    <body>
        <?php
            include_once './sidebar.php';   
        ?>
        <div id="left_notifications">

            <div class="slider leftslider">
<!--                <div class="close">

                </div>-->
                <div>
                    <ul>
                        <li>
                            <image src="user.png"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="icon">
                <div class="not_num">
                    <font>10</font>
                </div>
                <img src="not3.png"/>
            </div>
        </div>
<!--        <div class='register'>
            <input type='text' placeholder="Username" name='username'><br>
            <input type='email' placeholder="Email" name='email'><br>
            <input type='password' placeholder="Password" name='password'>
            <input type='password' placeholder="Rewrite your Password" name='repassword'><br>
            <input type='text' placeholder="First Name" name='firstname'> 
            <input type='text' placeholder="Last Name" name='lastname'> <br>
            <input type='date' placeholder="BirthDate" name='birthdate'>

            <input type='text' id='datepicker' placeholder="BirthDate" name='birthdate'>
            <select>
                add countries here !!!
            </select><br>
            <input type='text' maxlength="11" placeholder="Mobile Number" name='mobile'> 
            <input type='text' placeholder="Home Adress" name='address'>
            <input type='text' placeholder="Job" name='job'><br>
            <label>Gender:</label>
            <input type='radio' name='gender' value='m'><lable>Male</lable>
            <input type='radio' name='gender' value='f'><lable>Female</lable><br>
            <input type='checkbox' name='agreement'><label>I agree</label>
        </div>-->
        <div id="wrapper">
            <div class="post_whole">
                <div class="post">
                    <div class="post_info">
                        <div class="writer_pic">
                            <img src="user.png"/>
                        </div>
                        <div class="writer">
                            admin
                        </div>
                        <div class="post_date">
                            5 hours ago
                        </div>
                    </div>
                    <div class="post_body">
                        In spite off all the answers you already received, it is worth noting that you do not need to write a plugin to use jQuery in a function. Certainly if it's a simple, one-time function, I believe writing a plugin is overkill. It could be done much easier by just passing the selector to the function as a parameter. Your code would look something 
                    </div>
                    <div class="post_functions">
                        <img src="png/thumbs23.png"/>23 
                        <a href="" >Comment</a>
                    </div>
                </div>
                <div class="post_comment">
                    <div class="comment_info">
                        
                    </div>
                    <div class="comment_body">
                        
                    </div>
                    <div class="comment_functions">
                        
                    </div>
                </div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
</html>
