<?php
    @session_start();
    $user_id=$_SESSION['alterwire'];
    include_once '../model/posts.php';
    $posts=new posts();
    if(isset($_GET['post_body'])&&isset($_GET['post_permission'])){
        $post_body=$_GET['post_body'];
        $permission=$_GET['post_permission'];
        echo $posts->add_post($user_id, $post_body, $permission);
    }
