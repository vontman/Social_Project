<?php
    include_once '../model/users.php';
    $users=new users();
  if(isset($_POST["username"])){
      $username=@$_POST["username"];
        if( $users->check_username($username)){
           echo FALSE;                        
         }else{
              echo TRUE;
         }
        }
   if(isset($_POST["email"])){
        $email=@$_POST["email"];
   if( $users->check_email($email)){
       echo FALSE;                        
        }else{
            echo TRUE;
        }
       }
if(isset($_POST["username"])&&isset($_POST["email"])&&isset($_POST['password'])){
//    $username=@$_POST['username'];
//    $password=@$_POST['pass'];
//    $email=@$_POST['email'];
    $array['username']=@$_POST['username'];
    $array['password']=md5($_POST['password']);
    $array['email']=@$_POST['email'];
       
   // $fname=@$_POST['fname'];
   // $lname=@$_POST['lname'];
   // $date=@$_POST['date'];
   // $gender=@$_POST['gender'];
  //  $num=@$_POST['num'];
    //$location=@$_POST['country'];
  //     $array['firstname']=$fname;
 //      $array['lastname']=$lname;
//       $array['birthday']=$date;
//       $array['gender']=$gender;
 //      $array['mobile_number']=$num;

//       $array['country_id']=$location;
       echo $users->adduser($array);
 
}