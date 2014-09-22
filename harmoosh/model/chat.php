<?php
session_start();
include_once './messages.php';
$messages=new messages();
//$toggle=false;
if(isset($_GET['user_id'])){
//    $toggle=true;
    $user_id=$_GET['user_id'];
    $_SESSION['user_id']=$user_id;
    $msgs=$messages->view($user_id);
    foreach($msgs as $k=>$v){
        echo $v['body']."\n";
    }
}
if(isset($_GET['msg'])&&isset($_GET['to'])){
    $message_body=$_GET['msg'];
    $recieved_id=$_GET['to'];
//    if($toggle){
        print_r( $messages->send($_SESSION['user_id'], $recieved_id, "chat-test", $message_body));
//    }
}