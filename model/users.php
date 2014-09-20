<?php

class users {
    public $link;
    public $functions;
    public function __construct(){
        include_once './connect.php';
        include_once './functions.php';
        $this->functions=new db_functions;
        $this->functions->table_name='users';
        $this->link=$this->functions->link;
    }
    public function adduser($user){
        try{
            $user_id=$this->functions->insert($user);
            return $user_id;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
//    public function check_username($username){ // Soo WRong
//        $cols[]='id'; 
//        $cols[]='username';        
//        $aff_rows= $this->functions->select($cols);  
//         return $aff_rows;
//    }

    public function check_username($username){
         $query="SELECT id,username FROM users WHERE username='$username'";
         try{
            $sql=  mysqli_query($this->link, $query);
            return mysqli_affected_rows($this->link);
         } catch (Exception $ex) {
             return mysqli_errno($this->link);
         }
    }
    public function check_email($email){
         $query="SELECT id,username FROM users WHERE email='$email'";
         try{
            $sql=  mysqli_query($this->link, $query);
            return mysqli_affected_rows($this->link);
         } catch (Exception $ex) {
             return mysqli_errno($this->link);
         }
    }

    public function view_user($user_id){
        $cols=array("id","username","email","firstname","lastname","mobile_number","job","gender","country_id","image","cover","created");
        try{
            $user=$this->functions->select($cols, $user_id);
            return $user;
        }
        catch (Exception $ex){
            return mysqli_errno($this->link);
        }
    }
    public function login($username,$password){   // Function To login and return User Id !!
//        try{
//            $query="SELECT id,username FROM users WHERE username='$username'";
//            $sql=  mysqli_query($this->link, $query);
//            if(mysqli_affected_rows($this->link)>0){    
//                $query="SELECT id,password FROM users WHERE password='$password'";
//                $sql=  mysqli_query($this->link, $query);
//                if(mysqli_affected_rows($this->link)>0){
//                    return 0;
//                }
//                else{
//                    return 2;
//                }
//            }
//            else{
//                return 1;
//            }
//        } catch (Exception $ex) {
//            return mysqli_errno($this->link);
//        }
        $query="SELECT id,username,password FROM users WHERE username='$username' AND password='$password'";
        try{
            $sql=  mysqli_query($this->link, $query);
            $aff_rows=  mysqli_affected_rows($this->link);
            if($aff_rows>0){
                while($rows= mysqli_fetch_array($sql)){
                    $user_id=$rows['id'];
                }
                $date = date('Y/m/d h:i:s', time());
                $user_login['last_logged']=$date;
                $user_login['logged_in']='1';
                $this->functions->update($user_login, $user_id);
                return $user_id;
            }
            else{
                return $aff_rows;
            }
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
}
