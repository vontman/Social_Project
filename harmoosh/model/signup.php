<?php
    include_once 'users.php';
    $users=new users();
  if(isset($_POST["username"])){
      $username=@$_POST["username"];
        if( $users->check_username($username)<0){
           echo "username already exist";                        
         }else{
             echo" available";
         }
        }
   if(isset($_POST["email"])){
        $email=@$_POST["email"];
   if( $users->check_email($email)<0){
       echo "email already exist";                        
        }else{
            echo" available";
        }
       }
if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST['password'])){
    
    $username=@$_POST['username'];
    $password=@$_POST['password'];
    $email=@$_POST['email'];
      $array['username']=$username;
      $array['password']=$password;
       $array['email']=$email;
//    $fname=@$_POST['fname'];
//    $lname=@$_POST['lname'];
//    $date=@$_POST['date'];
//    $gender=@$_POST['gender'];
//    $num=@$_POST['num'];
//    $location=@$_POST['location'];
//    $users->adduser($user);
       $users->adduser($array);
}