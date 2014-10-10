
            <?php
                @session_start();
                $user_id=$_SESSION['alterwire'];
                include_once '../model/posts.php';
                $posts=new posts();
                $limit[15]=1;
                $view_posts=$posts->view_posts($user_id, $limit);
                foreach($view_posts as $k=>$v){
                    ?>  
                    <div class='post_whole'>
                        <div class="post" post='<?php echo $v['id'] ;?>'>
                            <div class="post_info">
                                <div class="writer_pic">
                                    <img src="user.png"/>
                                </div>
                                <div class="writer">
                                    <?php echo $v['username'];?>
                                </div>
                                <div class="post_date">
                                    5 hours ago
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
                            <div class="post_date">
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
            ?>
