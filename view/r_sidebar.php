    <head>
        <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<div class="sidebar r-sidebar">
    <div id="toggle">
        <image class="image" src="png/arrow454.png"/>
    </div>
<!--     <div class="logo">
        <h1> Online friends</h1>
    </div>-->
    <div class="online">
        <ul class="user_friends">
        <?php
            include_once 'model/friends.php';
            $friends=new friends();
            $user_friends=$friends->view_friends($user_id);
            foreach($user_friends as $k=>$v){
                $friend=$users->view_user($v)[0];
                $friend_username=$friend['username'];
                    ?>
                <li user='<?php echo $friend['id']; ?>' class="message <?php if($friend['logged_in']){
                    echo 'on';
                }
                ?>">
                    <img src="user.png"/>
                    <?php
                        echo $friend_username;
                    ?>
                </li>
                    <?php
            }
        ?>
        </ul>
    </div>
</div>