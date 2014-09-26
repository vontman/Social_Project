<?php
    include_once 'users.php';
    $users=new users();
  if(isset($_POST["username"])){
      $username=@$_POST["username"];
        if( $users->check_username($username)){
           echo "username already exist";                        
         }else{
             echo" available";
         }
        }
   if(isset($_POST["email"])){
        $email=@$_POST["email"];
   if( $users->check_email($email)){
       echo "email already exist";                        
        }else{
            echo" available";
        }
       }
if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST['password'])){
    $username=@$_POST['username'];
    $password=@$md5($_POST['password']);
    $email=@$_POST['email'];
    $array['username']=$username;
    $array['password']=$password;
    $array['email']=$email;
       
    $fname=@$_POST['fname'];
    $lname=@$_POST['lname'];
    $date=@$_POST['date'];
    $gender=@$_POST['gender'];
    $num=@$_POST['num'];
    
       $array['firstname']=$fname;
       $array['lastname']=$lname;
       $array['birthday']=$date;
       $array['gender']=$gender;
       $array['mobile_number']=$num;
       $location=@$_POST['location'];
       $array['country_id']=$location;
       echo $users->adduser($array);
}