
    <?php   
       $friend_id=@$_GET['user_id2'];
       include_once '../model/messages.php';
       $messages=new messages();
       include_once '../model/users.php';
       $users=new users();
       @session_start();
       $user_id=$_SESSION['alterwire'];
       $friend_username=$users->view_user($friend_id)[0]['username'];
       $chat_msgs=$messages->view($user_id, $friend_id);
       if($chat_msgs){
           echo "<div class='message_field' user='$friend_id' style='top:250px;'>
            <div class='chat_close'>
                <img src='png/close19.png'/>
            </div>
            <div class='user_to'>
                $friend_username
            </div>
            <div class='messages'>
                <div class='msgs' >";
            foreach($chat_msgs as $v){
                ?>
                    <div class='msg_contain' created="<?php echo $v['created']; ?>">
                            <div class='<?php if($v['recieved_id']==$user_id){
                                    echo "to";
                                }else{
                                    echo "from";
                                }?>'>
                                <img src='user.png'/>
                                <span>
                                    <?php echo nl2br($v['message']); ?>
                                </span>
                            </div>
                    </div>
                <?php
            }
            echo '</div>
                <div class="typing">
                User is typing ...
                </div>
                </div>
            <div class="chat_type" style="overflow:hidden;width:100%;">
                <textarea class="chat_input"></textarea>
            </div>
            </div>';
       }else{
           echo false;
       }
    ?>
            
