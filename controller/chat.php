<?php
    @session_start();
    $user_id=$_SESSION['alterwire'];
    include_once '../model/messages.php';
    $messages=new messages();
    if(isset($_GET['msg_body'])){
        $msg_body=$_GET['msg_body'];
        $recieved_id=$_GET['recieved_id'];
        $done=$messages->send($user_id, $recieved_id, $msg_body);
        if($done){
            echo '<div class="msg_contain">'
                . '<div class="from"><img src="user.png"/><span>'.$msg_body.'</span></div>'
                . '</div>';
        }else{
            
        }
    }