<?php
include_once 'functions.php';
include_once './users.php';
//$functions=new db_functions();
//$functions->table_name='users';
$users=new users();

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