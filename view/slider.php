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
                                                $current_date=date('Y-m-d h:i:s');
                                                $created=$v['created'];
                                                $diff=floor(strtotime($current_date)-strtotime($created));
                                                if((($diff)/3600/24)>1){
                                                    echo floor($diff/3600/24)." days";
                                                }elseif((($diff)/3600/24/60)>1){
                                                    echo floor($diff/3600/24/60)." hours";
                                                }elseif((($diff)/3600/24/60/60)>1){
                                                    echo floor($diff/3600/24/60)." minutes";
                                                }else{
                                                    echo " Few seconds ago !";
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