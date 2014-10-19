<?php
    include_once '../model/comments.php';
    $comments=new comments();
    include_once '../model/users.php';
    $users=new users();
    @session_start();
    $user_id=$_SESSION['alterwire'];
    if(isset($_GET['post_id'])&& isset($_GET['comment'])){
        $post_id=$_GET['post_id'];
        $comment_body=$_GET['comment'];
        $post_comment=$comments->add_comment($user_id, $post_id, $comment_body);
        if($post_comment){
            ?>
                <div class="post_comment" style="display:none;" post="<?php echo $post_comment; ?>">
                    <div class="post_info">
                        <div class="writer_pic" user='<?php  echo $user_id; ?>'>
                            <img src="user.png"/>
                        </div>
                        <div class="writer" user='<?php  echo $user_id; ?>'>
                            <?php  echo $users->view_user($user_id)[0]['username']; ?>
                        </div>
                        <div class="created">
                            <?php
                                $current_date=date('Y-m-d h:i:s');
                                $created=$v['created'];
                                $diff=floor(strtotime($current_date)-strtotime($current_date));
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
                            echo $post_body;
                        ?>
                    </div>
                    <div class="post_functions">
                        <span class="reply">Reply</span>
                        <div class="like_post" type="1">
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
        }else{
            return false;
        }
    }