<?php
    include_once 'users.php';
    $users=new users();
    $data=@$_GET["email"];
    $data2=@$_GET["username"];
    $data3=@$_GET["passlog"];
    $data4=@$_GET["userlog"];
    if(isset($_GET["username"])){
    $query="SELECT * FROM users WHERE username='$data2'";
}
if(isset($_GET["email"])){
    $query="SELECT * FROM users WHERE email='$data'";
}
if(isset($_GET["passlog"])){
    $query="SELECT * FROM users WHERE password='$data3'";
}
if(isset($_GET["userlog"])){
        $query="SELECT * FROM users WHERE email='$data4' OR username='$data4'";
}
$sql=  mysqli_query($con, $query);
if( mysqli_affected_rows($con)>0){
   echo "username already exist";                        
 }else{
     echo" available";
 }
    