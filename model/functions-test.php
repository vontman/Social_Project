<?php
//include_once 'functions.php';
//$functions=new db_functions();
//$functions->table_name='users';
//include_once './users.php';
//$users=new users();
//include_once './friends.php';
//$friends=new friends();
include_once './posts.php';
$posts=new posts();

////Start DB_FUNCTIONS TEST
//$input['username']='hamada';
//$input['password']=md5('test');
//$input['email']='hamada@rmial.com';
//$functions->insert($input);
////end insert test !!
//print_r($functions->select(array('id','username','email'),false,array('id','DESC'),array(1=>3)));
////end select test!!
//$functions->delete(4);
////end delete test!!!
//$update['username']='ellol';
//$update['email']='test@lol.com';
//$update['firstname']='elawy';
//$functions->update($update,2);
////end update test!!
////Start join table test !!
//$cols['users'][]="username";
//$cols['friends'][]='user_id';
//$cols['friends'][]='friend_id';
//$cols['posts'][]='id';
//$specific_row['cols']['friends.user_id']=2;
//$specific_row['cols']['friends.friend_id']=2;
//$specific_row['cols']['users.id!']=2;
//$specific_row['relation'][]='OR';
//$specific_row['relation'][]='AND';
//$functions->table_name="users";
//$limit[][1]='1 ';
//$limit[][1]='2 ';
//$limit[][1]='3 ';
////print_r($limit);
//print_r($functions->select($cols, false, false, $limit, $specific_row,array('friends','posts')));
////end join table test
//// END DB_FUNCTIONS TEST


////Start USERS TEST
//$user['username']='test';
//$user['password']=md5('adfas');
//$user['email']='test2$email.com';
//$users->adduser($user);
////end add_user function test
//echo $users->check_username('hamada');
//echo $users->check_email('hamada');
////end check uesr tests!!
//print_r($users->view_user(2));
////end view user !!
//echo $users->login('test', 'passtest');
////end login test!!
//echo $users->logout(6);
////end logout test !!!
////END USERS TEST



////Start Friends Test !!
//echo $friends->add_friend(1, 3);
//end add friend test !!
//echo $friends->accept(1, true);
//echo $friends->accept(2, false);
//end accepted test !!!
//print_r($friends->view_friends(2));
//end view friends test !!



////Start Messages Test !!!
//echo $messages->send(3, 2, "good night !!!", "long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!long message !!!");
////end send test !!!
//print_r($messages->check(2));
//end check test!!
//print_r($messages->view(2, 5));
//end view test !!



////manual
$limit[15]=1;
//        $link=  mysqli_connect("localhost", 'root', '', 'social_project');
////        $query="SELECT posts.* ,comments.* ,users.username FROM posts LEFT JOIN comments LEFT JOIN friends LEFT JOIN users WHERE (friends.user_id=$user_id OR friends.friend_id=$user_id) AND (posts.user_id=friends.user_id OR posts.user_id=friends.friend_id LIMIT ".($set_no-1).",15";
//        $query="SELECT posts.*,users.username,users.id AS users_id "
//                . "FROM posts "
//                . "LEFT JOIN friends ON (friends.user_id=$user_id OR friends.friend_id=$user_id) "
//                . "LEFT JOIN users ON users.id=posts.user_id "
//                . "WHERE (posts.user_id=friends.user_id OR posts.user_id=friends.friend_id) "
//                . "ORDER BY posts.created DESC";

//        try{
//            $sql= mysqli_query($link, $query);
//            $posts=array();
//            while($row=  mysqli_fetch_array($sql)){
//                $posts[]=$row;
//            }
//            echo mysqli_error($link);
//            echo $query;
            $user_posts=$posts->view_posts(2, $limit);
            echo "<table border>";
            foreach ($user_posts as $k=>$v){
                echo "<th style='font-size:22px;background:cyan;'>$k</th><td>";
                foreach ($v as $k2=>$v2){
                    echo "<tr><th>$k2</th><td>$v2</td></tr>";
                }
                echo "</td>";
            }
            echo "</table>";
//        } catch (Exception $ex) {
//            echo mysqli_errno($link);
//        }
//$post_id=2;
//$set_no=1;
//        $link=  mysqli_connect("localhost", 'root', '', 'social_project');
////        $query="SELECT posts.* ,comments.* ,users.username FROM posts LEFT JOIN comments LEFT JOIN friends LEFT JOIN users WHERE (friends.user_id=$user_id OR friends.friend_id=$user_id) AND (posts.user_id=friends.user_id OR posts.user_id=friends.friend_id LIMIT ".($set_no-1).",15";
//        $query="SELECT comments.* ,users.username,users.id AS users_id "
//                . "FROM comments "
//                . "LEFT JOIN users ON users.id=comments.user_id "
//                . "WHERE comments.post_id=$post_id "
//                . "ORDER BY comments.created DESC";
//
//        try{
//            $sql= mysqli_query($link, $query);
//            $posts=array();
//            while($row=  mysqli_fetch_array($sql)){
//                $posts[]=$row;
//            }
//            echo mysqli_error($link);
//            echo $query;
//            echo "<table border>";
//            foreach ($posts as $k=>$v){
//                echo "<tr><th style='font-size:22px;background:cyan;'>$k</th></tr>";
//                foreach ($v as $k2=>$v2){
//                    echo "<tr><th>$k2</th></tr><tr><td>$v2</td></tr>";
//                }
//            }
//            echo "</table>";
//        } catch (Exception $ex) {
//            echo mysqli_errno($link);
//        }