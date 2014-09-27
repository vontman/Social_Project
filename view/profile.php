<html>
    <head>
        <meta charset="UTF-8">
        <link type='text/css' rel='stylesheet' href='profile.css'/>
         <meta charset="UTF-8">
        <title></title>     
        <script src="js/profile.js"></script>
        <script src="js/message.js"></script>
        <link type='text/css' rel='stylesheet' href='header.css'/>
        <link type='text/css' rel='stylesheet' href='slider.css'/>
    </head>
    <body>
         <?php
         require_once 'header.php';
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
        <?php require_once 'wrapper.php';?>
        <div class="message_fields">
        <div class="message_field m1">
            <div class="top_message_field">
                <div class="message_caller">Omar Abd Elbaset</div>
            <div class="close">
                <img class="close_img" src="png/cancel10.png">
            </div>
            </div>
            <div class="middle_message_field">
                <div class="receiver">
                    <img src="png/profile9.png">
                    <div class="receive_text">Fine Thank You.</div>
                </div>
                 <div class="sender">
                  <img src="png/profile10.png">
                    <div class="send_text">Hello How Are You?</div>
                </div>
            </div>
            <form autocomplete="on" method="POST" action="">
            <div class="bottom_message_field">
                <textarea  type="text"  name="send" class="send" maxlength="255" min="1" ></textarea>
            </div>
            </form>
        </div>
            <div class="message_field m2"></div>
            <div class="message_field m3"></div>
            <div class="message_field m4"></div>
        </div>
        </body>
</html>
