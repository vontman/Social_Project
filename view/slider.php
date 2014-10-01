<script src='js/notifications.js'></script>
        <div class="slider_container left_slider">
            <div class="slider leftslider">
<!--                <div class="close">

                </div>-->
                <div>
                    <ul>
                        <?php
                            include_once 'model/friends.php';
                            $friends=new friends();
                            $requests=$friends->check_requests($user_id);
                            if($requests){
                                foreach($requests as $k=>$v){
                                    $request_user=$users->view_user($v['user_id'])[0];
                                    ?>
                                    <li>
                                        <image src="user.png"/>
                                        <div class='notification'>
                                            <font><?php  echo $request_user['username']; ?> added you as a friend</font>
                                            <div request_id='<?php echo $v['id']; ?>' user='<?php echo $v['user_id']; ?>' class='friend_request_btns'>
                                                <input type='submit' class='ignore' value='Ignore'/>
                                                <input type='submit' class='accept' value='Accept'/>
                                            </div>
                                        </div>
                                        <div id='notification_date'>
                                            <?php 
                                                $ago=1.0;
                                                if((time()-$v['created'])/1000/60/60/60/60>1){
                                                $ago=ceil((time()-$v['created'])/1000/60/60/60); 
                                                echo $ago;
                                                    echo ' hours';
                                                }else{
                                                $ago=ceil((time()-$v['created'])/1000/60/60/60); 
                                                echo $ago;
                                                    echo ' minutes';
                                                }
                                            ?> ago ....
                                        </div>
                                    </li>
                                    <?php
                                }
                            }
                            
                        ?>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="icon">
                <div class="not_num">
                    <font>10</font>
                </div>
                <img src="not3.png"/>
            </div>
        </div>       



        <div class="slider_container right_slider">
            <div class="slider rightslider">
<!--                <div class="close">

                </div>-->
                <div>
                    <ul>
                        <li>
                            <image src="user.png"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                        <li>
                            <image src="user.png" height="50px"/>
                            <div class='notification'>
                                <font>user has commented on your post</font>
                            </div>
                            <div id='notification_date'>
                                3 hours ago..
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="icon">
                <div class="not_num">
                    <font>10</font>
                </div>
                <img src="png/mail9.png"/>
            </div>
        </div>