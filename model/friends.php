<?php

class friends {
    public $link;
    public $functions;
    public $date;
    public function __construct(){
        include_once './connect.php';
        include_once './functions.php';
        $this->functions=new db_functions;
        $this->functions->table_name='friends';
        $this->link=$this->functions->link;
        $this->date=date('Y/m/d h:i:s', time());
    }
    public function add_friend($user_id,$friend_id){
        $add_friend['user_id']=$user_id;
        $add_friend['friend_id']=$friend_id;
        $add_friend['accepted']=0;
        $add_friend['created']=$this->date;
        try{
            $this->functions->insert($add_friend);
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function accept($friend_row,$accept){
        if($accept){
            $input['accepted']=1;
            $input['relationship']='friends';
            try{
                return $this->functions->update($input,$friend_row);
            } catch (Exception $ex) {
                return mysqli_errno($this->link);
            }
        }
        else{
            try{
                return $this->functions->delete($friend_row);
            } catch (Exception $ex) {
                return mysqli_errno($this->link);
            }
        }
    }
}
