<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of rating
 *
 * @author omar
 */
class rating {   
    public $link;
    public $functions;
    public $date;
    public function __construct() {
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions();
        $this->functions->table_name='rating';
        $this->link=$this->functions->link;
        $this->date=date('Y/m/d h:i:s', time());
    }
    public function check_rating($post_id,$post_type,$user_id=false){
        $specific_row['cols']['post_id']=$post_id;
        $specific_row['cols']['type']=$post_type;
        if($user_id){
            $specific_row['cols']['user_id']=$user_id;
        }
        $this->functions->select(false, FALSE, FALSE, false, $specific_row);
        return mysqli_affected_rows($this->link);
    }
    public function like($post_id,$post_type,$user_id){
        $input['post_id']=$post_id;
        $input['type']=$post_type;
        $input['user_id']=$user_id;
        $input['created']=$this->date;
        if($this->check_rating($post_id, $post_type,$user_id)>0){
//            $query="DELETE FROM rating WHERE (post_id=$post_id AND type=$post_type) AND user_id=$user_id";
//            $sql=  mysqli_query($this->link, $query);
//            return -1;
            $specific_row['cols']['post_id']=$post_id;
            $specific_row['cols']['type']=$post_type;
            $specific_row['cols']['user_id']=$user_id;
            return $this->functions->delete(false, $specific_row);
        }else{
            $this->functions->insert($input);
            if(mysqli_affected_rows($this->link)>0){
                return 1;
            }
        }
        $this->functions->table_name='posts';
    }
}
