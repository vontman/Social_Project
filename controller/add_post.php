<?php
    @session_start();
    $user_id=$_SESSION['alterwire'];
    include_once '../model/posts.php';
    $posts=new posts();
    include_once '../model/users.php';
    $users=new users();
    if(isset($_GET['post_image']) && empty($_GET['post_image'])){
        $image=$_GET['post_image'];
    }
    if(isset($_GET['post_body'])&&isset($_GET['post_permission'])){
        $post_body=$_GET['post_body'];
        $permission=$_GET['post_permission'];
        $image_name=false;
        if(isset($_GET['post_image']) && empty($_GET['post_image'])){
            $image_name;
        }
        $post_id=$posts->add_post($user_id, $post_body, $permission,$image_name);
        if($post_id){
            ?>
            <div class='post_whole' style='display:none;'>
                        <div class="post" post='<?php echo $post_id ;?>'>
                            <div class="post_info">
                                <div class="writer_pic" user='<?php  echo $user_id; ?>'>
                                    <img src="user.png"/>
                                </div>
                                <div class="writer" user='<?php  echo $user_id; ?>'>
                                    <?php echo $users->view_user($user_id)[0]['username'];?>
                                </div>
                                <div class="created">
                                    <?php
                                        $current_date=date('Y-m-d h:i:s');
                                        $created=$current_date;
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
                                <?php echo $post_body;?>
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Comment</a>
                            </div>
                        </div>
                        <div class="comments">
                        </div>
                        <div class='add_comment'>
                            <textarea id='add_comment_input'></textarea>
                        </div>
                    </div>
                    <?php
        }else{
            echo false;
        }
    }
