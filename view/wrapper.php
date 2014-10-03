<script src="js/add_post.js"></script>
        <div id='add_post_wrapper'>
            <div class="add_post">
                <div class='add_post_input'>
                    <!--<input type="file" id="add_post_image"/>-->
                    <textarea id='add_post_body' placeholder="Add Status Update Here ............"></textarea>
                </div>
                <div class='add_post_functions'>
                    <input type='submit' id='add_post_sbmt' value='Add Post' />
                    <select name="add_post_permission" id="permission_select">
                        <option value="2">
                            Friends Only
                        </option>
                        <option value="3">
                            Public
                        </option>
                        <option value="1">
                            Only Me
                        </option>
                    </select>
                </div>
            </div>
            <div id="add_post_toggle"><img src="png/arrow451.png"/></div>
        </div>




            <?php
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
