<?php
    @session_start();
    $user_id=$_SESSION['alterwire'];
    include_once '../model/friends.php';
    $friends=new friends();
    $friend_row=$_GET['request_id'];
    if(isset($_GET['user_id_accepted'])){
        $request_id=$_GET['user_id_accepted'];
        echo $friends->accept_request($friend_row);
    }elseif(isset($_GET['user_id_ignored'])){
        $request_id=$_GET['user_id_ignored'];
        echo $friends->ignore_request($friend_row);
    }