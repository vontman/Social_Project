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
    public function check_friends($user_id,$friend_id){
        $query="SELECT id,user_id,friend_id FROM friends WHERE user_id='$user_id' AND friend_id='$friend_id'";
        try{
            $sql=  mysqli_query($this->link, $query);
            $aff_rows=  mysqli_affected_rows($this->link);
            return $aff_rows;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function add_friend($user_id,$friend_id){
        $query="SELECT id,user_id,friend_id FROM friends WHERE user_id='$user_id' AND friend_id='$friend_id'";
        try{
            $sql=  mysqli_query($this->link, $query);
            $aff_rows=  mysqli_affected_rows($this->link);
            if($aff_rows<1){
                $add_friend['user_id']=$user_id;
                $add_friend['friend_id']=$friend_id;
                $add_friend['accepted']=0;
                $add_friend['created']=$this->date;
                try{
                    return $this->functions->insert($add_friend);
                } catch (Exception $ex) {
                    return mysqli_errno($this->link);
                }
            }
            else{
                die("ERROR !!");
            }
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
