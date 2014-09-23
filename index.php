<?php
    session_start();
    ob_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery-ui.js"></script>        
         <!--Addons !!!-->
        <script src='datetimepicker/DateTimePicker.js'></script>
        <script src="fullcalendar/lib/jquery.min.js"></script>
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="fullcalendar/lib/jquery-ui.custom.min.js"></script>
        <script src="fullcalendar/fullcalendar.js"></script>
        <script src="js/index.js"></script>
        <link type='text/css' rel='stylesheet' href='view/style.css'/>
        <link type='text/css' rel='stylesheet' href='view/sidebar.css'/>
        <link type='text/css' rel='stylesheet' href='view/wrapper.css'/>
        <link type='text/css' rel='stylesheet' href='view/slider.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.min.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.structure.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.theme.css'/>
        <!--Addons !!!-->
        <link type='text/css' rel='stylesheet' href='datetimepicker/DateTimePicker.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.min.css'/>
        <link type='text/css' rel='stylesheet' href='fullcalendar/fullcalendar.print.css'/>
    </head>
    <body>
        <?php
        if (isset($_COOKIE['alterwire'])||isset($_SESSION['alterwire'])){
            if(isset($_COOKIE['alterwire'])){
                $_SESSION['alterwire']=$_COOKIE['alterwire'];
            }
            include_once 'view/sidebar.php'; 
            include_once 'view/slider.php';
            include_once 'view/wrapper.php';
        }
        ?>
    </body>
</html>

<?php
    ob_end_flush();
?>