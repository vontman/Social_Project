<?php
    include_once '../model/comments.php';
    $comments=new comments();
    @session_start();
    $user_id=$_SESSION['alterwire'];
    if(isset($_GET['post_id'])&& isset($_GET['comment'])){
        $post_id=$_GET['post_id'];
        $comment_body=$_GET['comment'];
        $post_comment=$comments->add_comment($user_id, $post_id, $comment_body);
        if($post_comment){
            ?>
            <div class="post_comment" style="display:none;">
                <div class="post_info">
                    <div class="writer_pic" user='<?php  echo $user_id; ?>'>
                        <img src="user.png"/>
                    </div>
                    <div class="writer" user='<?php  echo $user_id; ?>'>
                        <?php  echo $user_id; ?>
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