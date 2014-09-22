<?php

$data=@$_GET["email"];
$usrname=@$_GET["username"];
$con=  mysqli_connect("localhost", "root", "", "new");
$query="SELECT * FROM users WHERE email='$data' &&username='$usrname'";
$sql=  mysqli_query($con, $query);
if( mysqli_affected_rows($con)>0){
   echo "username already exist";                        
 }else{
     echo" can go";
 }