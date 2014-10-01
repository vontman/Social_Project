    <head>
        <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet" type="text/css">
    </head>
<div class="sidebar r-sidebar">
    <div id="toggle">
        <image class="image" src="png/arrow454.png"/>
    </div>
    <div class="online">
        <ul class="user_friends">
        <?php
            include_once 'model/friends.php';
            $friends=new friends();
            if($friends->view_friends($user_id)){
                $user_friends_ids=$friends->view_friends($user_id);
                foreach($user_friends_ids as $k=>$v){
                    $li_friend=$users->view_user($v)[0]['logged_in'];
                    if($li_friend=='1'){
                        $user_friends[]=$users->view_user($v)[0];
                    }
                }
                foreach($user_friends_ids as $k=>$v){                
                    $li_friend=$users->view_user($v)[0]['logged_in'];
                    if($li_friend=='0'){
                        $user_friends[]=$users->view_user($v)[0];
                    }
                }
                foreach($user_friends as $k=>$v){
                       ?>
                    <li user='<?php echo $v['id']; ?>' class="message <?php if($v['logged_in']){
                        echo 'on';
                    }
                    ?>">
                        <img src="user.png"/>
                        <?php
                            echo $v['username'];
                        ?>
                    </li>
                        <?php
                }
            }
        ?>
        </ul>
    </div>
</div>