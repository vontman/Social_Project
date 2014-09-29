<?php
    session_start();
    ob_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link type='text/css' rel='stylesheet' href='view/style.css'/>
        <link type='text/css' rel='stylesheet' href='view/message.css'/>
        <link type='text/css' rel='stylesheet' href='view/sidebar.css'/>
        <link type='text/css' rel='stylesheet' href='view/wrapper.css'/>
        <link type='text/css' rel='stylesheet' href='view/slider.css'/>
        
        
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.min.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.structure.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.theme.css'/>
        <script src="js/jquery-1.11.0.js" type="text/javascript"></script>
        <script src="js/jquery-ui.js" type="text/javascript"></script>        
         <!--Addons !!!-->
         <script src='datetimepicker/DateTimePicker.js' type="text/javascript"></script>
        <script src="fullcalendar/lib/moment.min.js" type="text/javascript"></script>
        <script src="fullcalendar/lib/jquery-ui.custom.min.js" type="text/javascript"></script>
        <script src="fullcalendar/fullcalendar.js" type="text/javascript"></script>
        <script src="custom-scrollbar/jquery.custom-scrollbar.js" type="text/javascript"></script>
        <script src="custom-scrollbar/jquery.custom-scrollbar.min.js" type="text/javascript"></script>
        <link type='text/css' rel='stylesheet' href='custom-scrollbar/jquery.custom-scrollbar.css'/>
        <!--Addons !!!-->
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/message.js" type="text/javascript"></script>
        <link type='text/css' rel='stylesheet' href='datetimepicker/DateTimePicker.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.min.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.print.css'/>
    </head>
    <body>
        <script src="js/home.js"></script>
        <?php
        if (isset($_COOKIE['alterwire'])||isset($_SESSION['alterwire'])){
            if(isset($_COOKIE['alterwire'])){
                $_SESSION['alterwire']=$_COOKIE['alterwire'];
            }
        // user definition
            include_once './model/users.php';
            $users=new users();
            $user_id=$_SESSION['alterwire'];
            $user=$users->view_user($user_id)[0];
        //end
            require_once 'view/r_sidebar.php'; 
            require_once 'view/slider.php';
            require_once 'view/message.php';
        ?>
                <?php
                if(isset($_GET['post'])){
                    require_once 'view/l_sidebar.php';
                    require_once 'view/post.php';
                }elseif(isset($_GET['logout'])){
                    require_once 'view/l_sidebar.php';
                    $users->logout($user_id);
                    echo '<script>location.reload();</script>' ;
                }elseif(isset($_GET['user'])){
                    require_once 'view/profile.php';
                    echo' <script src="js/profile.js" type="text/javascript"></script>';
                }else{
                    require_once 'view/l_sidebar.php';
                ?>
                    <div id="contain_wrapper" class="contain_wrapper">
                        <div id="wrapper" class="wrapper">
                <?php
                    require_once 'view/wrapper.php';
                ?>
                        </div>
                    </div>
                <?php
                    }
                ?>
        <?php
        }
        else{
            require_once 'view/home.php';
        }
        ?>  
    </body>
</html>

<?php
    ob_end_flush();
?>