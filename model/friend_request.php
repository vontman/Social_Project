<?php
    @session_start();
    $user_id=$_SESSION['alterwire'];
    include_once './friends.php';
    $friends=new friends();
    $friend_row=$_GET['request_id'];
    if(isset($_GET['user_id_accepted'])){
        $request_id=$_GET['user_id_accepted'];
        echo $friends->add_ignore($friend_row);
    }elseif(isset($_GET['user_id_ignored'])){
        $request_id=$_GET['user_id_ignored'];
        echo $friends->add_ignore($friend_row,0);
    }