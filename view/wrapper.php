
            <?php
                @session_start();
                $user_id=$_SESSION['alterwire'];
                include_once '../model/posts.php';
                $posts=new posts();
                include_once '../model/comments.php';
                $comments=new comments();
                $limit[30]=1;
                $view_posts=$posts->view_posts($user_id, $limit);
                foreach($view_posts as $k=>$v){
                    ?>  
                    <div class='post_whole'>
                        <div class="post" post='<?php echo $v['id'] ;?>'>
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
                            <div class="post_body">
                                <?php echo $v['body'];?>
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Comment</a>
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
                                        <div class="post_comment">
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
                                                    echo $v['body'];
                                                ?>
                                            </div>
                                            <div class="post_functions">
                                                <img src="png/thumbs23.png"/>23 
                                                <a href="" >Reply</a>
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
                                    <textarea id='add_comment_input'></textarea>
                                </div>
                    </div>
                    <?php
                }
                for($i=0;$i<15;$i++){
                    ?>
                <div class="post_whole">
                    <div class="post">
                        <div class="post_info">
                            <div class="writer_pic">
                                <img src="user.png"/>
                            </div>
                            <div class="writer">
                                admin
                            </div>
                            <div class="created">
                                5 hours ago
                            </div>
                        </div>
                        <div class="post_body">
                            In spite off all the answers you already received, it is worth noting that you do not need to write a plugin to use jQuery in a function. Certainly if it's a simple, one-time function, I believe writing a plugin is overkill. It could be done much easier by just passing the selector to the function as a parameter. Your code would look something 
                        </div>
                        <div class="post_functions">
                            <img src="png/thumbs23.png"/>23 
                            <a href="" >Comment</a>
                        </div>
                    </div>
                    <div class="comments">
                        <div class="post_comment">
                            <div class="post_info">
                                <div class="writer_pic">
                                    <img src="user.png"/>
                                </div>
                                <div class="writer">
                                    admin
                                </div>
                            </div>
                            <div class="comment_body">
                                I think this is just great :D
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Reply</a>
                            </div>
                        </div>
                        <div class="post_comment">
                            <div class="post_info">
                                <div class="writer_pic">
                                    <img src="user.png"/>
                                </div>
                                <div class="writer">
                                    admin
                                </div>
                            </div>
                            <div class="comment_body">
                                I think this is just great :D
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Reply</a>
                            </div>
                        </div>
                        <div class="post_comment">
                            <div class="post_info">
                                <div class="writer_pic">
                                    <img src="user.png"/>
                                </div>
                                <div class="writer">
                                    admin
                                </div>
                            </div>
                            <div class="comment_body">
                                I think this is just great :D
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Reply</a>
                            </div>
                        </div>
                        <div class="post_comment">
                            <div class="post_info">
                                <div class="writer_pic">
                                    <img src="user.png"/>
                                </div>
                                <div class="writer">
                                    admin
                                </div>
                            </div>
                            <div class="comment_body">
                                I think this is just great :D
                            </div>
                            <div class="post_functions">
                                <img src="png/thumbs23.png"/>23 
                                <a href="" >Reply</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <?php 
                }
