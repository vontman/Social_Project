<?php
//include_once 'functions.php';
//$functions=new db_functions();
//$functions->table_name='users';
//include_once './users.php';
//$users=new users();
//include_once './friends.php';
//$friends=new friends();

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