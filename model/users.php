<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of users
 *
 * @author omar
 */
class users {
    public $link;
    public $functions;
    public function __construct() {
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
}
