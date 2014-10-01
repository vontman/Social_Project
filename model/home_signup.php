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
    $array['username']=@$_POST['username'];
    $array['password']=md5($_POST['password']);
    $array['email']=@$_POST['email'];
       
    $array['firstname']=@$_POST['fname'];
    $array['lastname']=@$_POST['lname'];
    $array['gender']=@$_POST['gender'];
    $array['mobile_number']=@$_POST['num'];
    //$location=@$_POST['country'];
      // $date=@$_POST['date'];
//       $array['birthday']=$date;
//       $array['country_id']=$location;
       $new=$users->adduser($array);
              session_start();
              $_SESSION['alterwire']=$new;
              echo $new;
}