<?php
    include_once 'users.php';
    $users=new users();
  if(isset($_GET["username"])){
    $query="SELECT * FROM users WHERE username='$username'";
        $username=@$_GET["username"];
        $sql=  mysqli_query($con, $query);
        if( mysqli_affected_rows($con)>0){
           echo "username already exist";                        
         }else{
             echo" available";
         }
        }
        if(isset($_GET["email"])){
    $query="SELECT * FROM users WHERE email='$email'";
        $email=@$_GET["email"];
        $sql=  mysqli_query($con, $query);
    if( mysqli_affected_rows($con)>0){
       echo "email already exist";                        
     }else{
         echo" available";
     }
    }
if(isset($_GET["username"])&&isset($_GET["email"])){
    
}
    