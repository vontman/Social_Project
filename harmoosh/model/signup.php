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
   if( $users->check_email($username)<0){
       echo "email already exist";                        
        }else{
            echo" available";
        }
       }
if(isset($_GET["username"])&&isset($_GET["email"])){
    
}
    