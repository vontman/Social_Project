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
            $messages->remove_typing($user_id, $recieved_id);
            echo '<div class="msg_contain">'
                . '<div class="from"><img src="user.png"/><span>'.$msg_body.'</span></div>'
                . '</div>';
        }else{
            
        }
    }elseif(isset($_GET['last_msg'])&&isset($_GET['user_id2'])){
        $friend_id=$_GET['user_id2'];            
        $last_msg=$_GET['last_msg'];
        $new_msgs=$messages->check_selected($user_id, $friend_id, $last_msg);
        if($new_msgs){
            foreach($new_msgs as $k=>$v){
                $messages->seen($new_msgs);
                ?>
                <div class='msg_contain' created="<?php echo $v['created']; ?>">
                    <div class='to'>
                        <img src='user.png'/>
                        <span>
                            <?php echo nl2br($v['message']); ?>
                        </span>
                    </div>
                </div>
                <?php
            }
        }elseif($messages->check_typing($friend_id, $user_id)){
            echo '10';
        }else{
            echo false;
        }
    }elseif(isset($_GET['user_id2'])){
        $friend_id=$_GET['user_id2'];      
        if(isset($_GET['typing'])){
            $messages->typing($user_id, $friend_id);
        }elseif(isset($_GET['typing_remove'])){
            $messages->remove_typing($user_id, $friend_id);
        }
    }