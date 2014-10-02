       <div class="message_fields"> 
<?php 
       $user_id2=@$_GET['user_id2'];
       ?>

           <?php echo "<div class='message_field' user='<?php echo $user_id2 ;?>'>"; ?>
            <div class="top_message_field">
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
            </form>
       <?php echo ' </div>'; ?>
 </div>     