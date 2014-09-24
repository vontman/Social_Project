<?php
    include_once 'users.php';
    $users=new users();
  if(isset($_GET["username"])){
      $username=@$_GET["username"];
        if( $users->check_username($username)<0){
           echo "username already exist";                        
         }else{
             echo" available";
         }
        }
   if(isset($_GET["email"])){
        $email=@$_GET["email"];
   if( $users->check_email($email)<0){
       echo "email already exist";                        
        }else{
            echo" available";
        }
       }
if(isset($_GET["username"])&&isset($_GET["email"])&&isset($_GET['password'])){
    $username=@$_POST['username1'];
    $password=@$_POST['password'];
    $email=@$_POST['email1'];
//    $fname=@$_POST['fname1'];
//    $lname=@$_POST['lname1'];
//    $date=@$_POST['date1'];
//    $gender=@$_POST['gender1'];
//    $num=@$_POST['num1'];
//    $location=@$_POST['location1'];
//    $users->adduser($user);
}