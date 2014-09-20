<?php

class users {
    public $link;
    public $functions;
    public function __construct(){
        include_once './connect.php';
        include_once './function.php';
        $this->functions=new db_functions;
        $this->functions->table_name='users';
    }
    public function adduser(){
        $this->functions->insert($input);
    }
    public function check_user($username){
        $con=  $this->con;
         $query="SELECT * FROM users WHERE username='$user'";
         $sql=  mysqli_query($con, $query);
         return mysqli_affected_rows($con);
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
    public function check_login($username,$password){
        $user['username']=$username;
        $user['password']=$password;
        try{
            $aff_rows=$this->functions->select($user);
            return $aff_rows;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
}
