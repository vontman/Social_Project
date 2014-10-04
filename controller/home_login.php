<?php
    session_start();
    include_once '../model/users.php';
    $users=new users();
    if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['remember'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        $remember=$_POST['remember'];
        if($users->login($username,$password,$remember)){
            echo true;
        }else{
            echo false;
        }
    }
    