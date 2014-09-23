<?php
    include_once 'users.php';
    $users=new users();
    $email=@$_GET["email"];
    $username=@$_GET["username"];
    $passlog=@$_GET["passlog"];
    $userlog=@$_GET["userlog"];
    if(isset($_GET["username"])){
    $query="SELECT * FROM users WHERE username='$username'";
}
if(isset($_GET["email"])){
    $query="SELECT * FROM users WHERE email='$email'";
}
if(isset($_GET["passlog"])){
    $query="SELECT * FROM users WHERE password='$passlog'";
}
if(isset($_GET["userlog"])){
        $query="SELECT * FROM users WHERE email='$userlog' OR username='$userlog'";
}
$sql=  mysqli_query($con, $query);
if( mysqli_affected_rows($con)>0){
   echo "username already exist";                        
 }else{
     echo" available";
 }
    