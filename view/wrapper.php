
            <?php
                @session_start();
                $user_id=$_SESSION['alterwire'];
                include_once '../model/posts.php';
                $posts=new posts();
                include_once '../model/comments.php';
                $comments=new comments();
                include_once '../model/rating.php';
                $rating=new rating();
                $limit[30]=1;
                $view_posts=$posts->view_posts($user_id, $limit);
                foreach($view_posts as $k=>$v){
                    ?>  
                    <div class='post_whole'>
                        <div class="post" post='<?php echo $v['id'] ;?>' type="0">
                            <div class="post_info">
                                <div class="writer_pic" user='<?php  echo $v['user_id']; ?>'>
                                    <img src="user.png"/>
                                </div>
                                <div class="writer" user='<?php  echo $v['user_id']; ?>'>
                                    <?php echo $v['username'];?>
                                </div>
                                <div class="created">
                                    <?php
                                        $current_date=date('Y-m-d h:i:s');
                                        $created=$v['created'];
                                        $diff=floor(strtotime($current_date)-strtotime($created));
                                        if((($diff)/3600/24)>1){
                                            if(floor(($diff)/3600/24)==1){
                                                echo " Yesterday ....";
                                            }else{
                                                echo floor($diff/3600/24)." days ago ....";
                                            }
                                        }elseif((($diff)/3600)>1){
                                            echo floor($diff/3600)." hours ago ....";
                                        }elseif((($diff)/60)>1){
                                            echo floor($diff/60)." minutes ago ....";
                                        }else{
                                            echo " Few seconds ago ....";
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="post_body">
                                <?php echo $v['body'];?>
                            </div>
                            <div class="post_functions">
                                <div class="like_post">
                                    <img src="png/thumbs23.png"/>
                                    <span class="likes_count"><?php
                                        $likes_count=$rating->check_rating($v['id'], 0);
                                        if($likes_count>0){
                                            if($rating->check_rating($v['id'], 0, $user_id)>0){
                                                if($likes_count==1){
                                                    echo "You ";
                                                }else{
                                                    echo "You and ".($likes_count-1);
                                                }
                                            }else{
                                                echo $likes_count;
                                            }
                                            echo " like this ";
                                        }
                                    ?></span> 
                                </div>
                            </div>
                        </div>
                        <div class="comments">
                        <?php
                            $limit[100]=1;
                            $post_comments=$comments->view_comments($v['id'], $limit);
                            if($post_comments){
                                ?>
                                    <?php
                                        foreach($post_comments as $k=>$v){
                                            ?>
                                        <div class="post_comment" post="<?php echo $v['id']; ?>"  type="1">
                                            <div class="post_info">
                                                <div class="writer_pic" user='<?php  echo $v['user_id']; ?>'>
                                                    <img src="user.png"/>
                                                </div>
                                                <div class="writer" user='<?php  echo $v['user_id']; ?>'>
                                                    <?php  echo $v['username']; ?>
                                                </div>
                                                <div class="created">
                                                    <?php
                                                        $current_date=date('Y-m-d h:i:s');
                                                        $created=$v['created'];
                                                        $diff=floor(strtotime($current_date)-strtotime($created));
                                                        if((($diff)/3600/24)>1){
                                                            if(floor(($diff)/3600/24)==1){
                                                                echo " Yesterday ....";
                                                            }else{
                                                                echo floor($diff/3600/24)." days ago ....";
                                                            }
                                                        }elseif((($diff)/3600)>1){
                                                            echo floor($diff/3600)." hours ago ....";
                                                        }elseif((($diff)/60)>1){
                                                            echo floor($diff/60)." minutes ago ....";
                                                        }else{
                                                            echo " Few seconds ago ....";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="comment_body">
                                                <?php
                                                    echo $v['body'];
                                                ?>
                                            </div>
                                            <div class="post_functions">
                                                <span class="reply">Reply</span>
                                                <div class="like_post">
                                                    <img src="png/thumbs23.png"/>
                                                    <span class="likes_count"><?php
                                                        $likes_count=$rating->check_rating($v['id'], 1);
                                                        if($likes_count>0){
                                                            if($rating->check_rating($v['id'], 1, $user_id)>0){
                                                                if($likes_count==1){
                                                                    echo "You ";
                                                                }else{
                                                                    echo "You and ".($likes_count-1);
                                                                }
                                                            }else{
                                                                echo $likes_count;
                                                            }
                                                            echo " like this ";
                                                        }
                                                    ?></span> 
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        ?>
                                
                            <?php
                            }
                            ?>
                                </div>
                                <div class='add_comment'>
                                    <textarea id='add_comment_input' placeholder="Write Comment Here ..."></textarea>
                                </div>
                    </div>
                    <?php
                }
                
