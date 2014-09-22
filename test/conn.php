<?php

$data=@$_GET["email"];
$data2=@$_GET["username"];
$con=  mysqli_connect("localhost", "root", "", "social_project");
if($data2==TRUE){
    $query="SELECT * FROM users WHERE username='$data2'";
}
if($data==TRUE){
    $query="SELECT * FROM users WHERE email='$data'";
}
$sql=  mysqli_query($con, $query);
if( mysqli_affected_rows($con)>0){
   echo "username already exist";                        
 }else{
     echo" can go";
 }