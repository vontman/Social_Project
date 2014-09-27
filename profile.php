<html>
    <head>
        <meta charset="UTF-8">
        <link type='text/css' rel='stylesheet' href='view/profile.css'/>
         <meta charset="UTF-8">
        <title></title>
        <script src="js/jquery-1.11.0.js"></script>
        <script src="js/jquery-ui.js"></script>        
         <!--Addons !!!-->
        <script src='datetimepicker/DateTimePicker.js'></script>
        <script src="fullcalendar/lib/jquery.min.js"></script>
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="fullcalendar/lib/jquery-ui.custom.min.js"></script>
        <script src="custom-scrollbar/jquery.custom-scrollbar.js"></script>
        <script src="custom-scrollbar/jquery.custom-scrollbar.min.js"></script>
        <link type='text/css' rel='stylesheet' href='custom-scrollbar/jquery.custom-scrollbar.css'/>
        <script src="js/profile.js"></script>
        <script src="js/message.js"></script>
        <link type='text/css' rel='stylesheet' href='view/sidebar.css'/>
        <link type='text/css' rel='stylesheet' href='view/style.css'/>
        <link type='text/css' rel='stylesheet' href='view/header.css'/>
        <link type='text/css' rel='stylesheet' href='view/slider.css'/>
        <link type='text/css' rel='stylesheet' href='view/profile_wrapper.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.min.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.structure.css'/>
        <link type='text/css' rel='stylesheet' href='js/jquery-ui.theme.css'/>
    </head>
    <body>
         <?php
          require_once 'view/header.php';
         require_once 'view/r_sidebar.php';
     require_once 'view/slider.php';
    ?>
    <div class="detail"> 
        <div class="about all">
            <a href=""><h4>About:</h4></a>
            <ul>
                <li>Name: Ahmed Alaa</li>
                <li>Gender: Male</li>
                <li>Age: 19</li>
                <li>Email:ahmedalaa.9@gmail.com</li> 
                <li>Mobil Num:+201128220051 </li>
                <li>Country: Egypt</li>
            </ul>
        </div>
        <div class="interests all">
            <a href=""><h4>Interests:</h4></a>
            <ul>
                <li>Playing Football</li>
                <li>Reading Books</li>
                <li>Computer Science</li>
                <li></li> 
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="friends all">
            <a href=""><h4>Friends:</h4></a>
            <ul>
                <li>Amr Sobhy</li>
                <li>Omar Abd Elbaset</li>
                <li>Ahmed Saad</li>
                <li>Mohamed Essam</li> 
                <li>Abdo Artist</li>
                <li>Mimo</li>
            </ul>
        </div>
        <div class="follwers all">
            <a href=""><h4>followers:</h4></a>
            <ul>
                <li>Ali Hamdi</li>
                <li>Ahmed Mohamed</li>
                <li>Ali Elsid</li>
                <li>Ibraim Hassan</li> 
                <li>Sallah Said</li>
                <li></li>
            </ul>
        </div>
        <div class="groups all">
            <a href=""><h4>Groups:</h4></a>
            <ul>
                <li>Ali Hamdi</li>
                <li>Abdalla  Eid</li>
                <li>Computer Science</li>
                <li>lecture Of Scince 72</li> 
                <li>Alaa Lovers</li>
                <li>Omar Lovers</li>
            </ul>
        </div>
        <div class="likes all">
            <a href=""><h4>Likes:</h4></a>
            <ul>
                <li>Abo Treka</li>
                <li>Shekabala</li>
                <li>Asa7be</li>
                <li>Gamers Field</li> 
                <li></li>
                <li></li>
            </ul>
        </div>
        <div class="activities all">
            <a href=""><h4>Activities:</h4></a>
            <ul>
                <li>Reading C# 2010 All-in-One For Dummies</li>
                <li>watching The Conjuring (2013)</li>
                <li>listening to mashary</li>
                <li>watching Home alone</li> 
                <li>reading News Paper</li>
                <li></li>
            </ul>
        </div>
    </div>
        <?php require_once 'view/profile_wrapper.php';?>
        </body>
</html>
