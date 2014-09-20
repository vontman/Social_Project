<?php
include_once 'functions.php';
$functions=new db_functions();
$functions->table_name='users';


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