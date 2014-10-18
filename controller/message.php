
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
                                    <?php echo $v['message']; ?>
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
            
            
            
<!--            <div class="top_message_field">
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
            </form>-->