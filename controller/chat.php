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
    if(isset($_GET['user2_id'])){
        $friend_id=$_GET['user_id'];
        if(isset($_GET['last_created'])){            
            $last_msg=$_GET['last_created'];
            $new_msgs=$messages->check_selected($user_id, $friend_id, $last_msg);
            if($new_msgs){
                foreach($new_msgs as $k=>$v){
                    $messages->seen($new_msgs);
                    ?>
                    <div class='msg_contain' created="<?php echo $v['created']; ?>">
                        <div class='to'>
                            <img src='user.png'/>
                            <span>
                                <?php echo $v['message']; ?>
                            </span>
                        </div>
                    </div>
                    <?php
                }
            }elseif($messages->check_typing($friend_id, $user_id)){
                echo 'lol';
            }else{
                echo false;
            }
        }elseif(isset($_GET['typing'])){
            $typing=$_GET['typing'];
            if($typing){
                $messages->typing($user_id, $friend_id);
            }else{
            }
        }
    }