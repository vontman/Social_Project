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
            <div class="post_comment" style='display:none;'>
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
                            $diff=floor(strtotime($current_date)-strtotime($created));
                            if((($diff)/3600/24)>1){
                                echo floor($diff/3600/24)." days";
                            }elseif((($diff)/3600)>1){
                                echo floor($diff/3600)." hours";
                            }elseif((($diff)/60)>1){
                                echo floor($diff/60)." minutes";
                            }else{
                                echo " Few seconds ";
                            }
                        ?> ago ....
                    </div>
                </div>
                <div class="comment_body">
                    <?php
                        echo $comment_body;
                    ?>
                </div>
                <div class="post_functions">
                    <img src="png/thumbs23.png"/>23 
                    <a href="" >Reply</a>
                </div>
            </div>
            <?php
        }else{
            return false;
        }
    }