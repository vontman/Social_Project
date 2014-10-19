<?php
    include_once '../model/comments.php';
    $comments=new comments();
    include_once '../model/users.php';
    $users=new users();
    @session_start();
    $user_id=$_SESSION['alterwire'];
    if(isset($_GET['post_id'])&& isset($_GET['comment'])&&isset($_GET['post_type'])){
        $post_type=$_GET['post_type'];
        $post_id=$_GET['post_id'];
        $comment_body=$_GET['comment'];
        $post_comment=$comments->add_comment($user_id, $post_id, $comment_body,$post_type);
        if($post_comment){
            if($post_type==0){
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
                                $created=$current_date;
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
                            echo $comment_body;
                        ?>
                    </div>
                    <div class="post_functions">
                        <span class="reply">Reply</span>
                        <div class="like_post" type="1">
                            <img src="png/thumbs23.png"/>
                            <span class="likes_count"></span> 
                        </div>
                    </div>
                </div>
            <?php
            }elseif($post_type==1){
                ?>
                looooooool
                <?php
            }
        }else{
            return false;
        }
    }