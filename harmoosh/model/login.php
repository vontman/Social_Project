<?php
    session_start();
    include_once '../model/users.php';
    $users=new users();
    if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['remember'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $remember=$_POST['remember'];
        if($users->login($username,$password,$remember)){
            print_r($_SESSION);
            print_r($_COOKIE);
        }else{
            echo 'Error';
        }
    }
    