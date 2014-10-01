<?php

class friends {
    public $link;
    public $functions;
    public $date;
    public function __construct(){
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions;
        $this->functions->table_name='friends';
        $this->link=$this->functions->link;
        $this->date=date('Y/m/d h:i:s', time());
    }
    public function check_friends($user_id,$friend_id){
        $query="SELECT id,user_id,friend_id,accepted FROM friends WHERE user_id='$user_id' AND friend_id='$friend_id'";
        try{
            $sql=  mysqli_query($this->link, $query);
            $aff_rows=  mysqli_affected_rows($this->link);
            if($aff_rows){
                while($row=  mysqli_fetch_array($sql)){
                    if ($row['accepted']==0){
                        return 1;
                    }elseif($row['accepted']==1){
                        return 2;
                    }
                }
            }else{
                return $aff_rows;
            }
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function add_friend($user_id,$friend_id){
        try{
            $specific_row['cols']['user_id']=$user_id;
            $specific_row['cols']['friend_id']=$friend_id;
            if( $this->functions->select($cols=FALSE,$id=FALSE,$order=FALSE,$limit=false,$specific_row)<1){
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
                die("You are already friends !!");
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
    public function view_friends($user_id){
        $row=array();
        $row['cols']['user_id']=$user_id;
        $row['cols']['friend_id']=$user_id;
        $row['relation'][]='OR';
        try{
            $ids=$this->functions->select(array('id','user_id','friend_id'), false, false,false,$row);
            if($ids){
                foreach($ids as $k=>$v){
                    if ($v['user_id']==$user_id){
                        $friends_ids[]=$v['friend_id'];
                    }
                    if($v['friend_id']==$user_id){
                        $friends_ids[]=$v['user_id'];
                    }
                }
                return $friends_ids;
            }else{
                return 0;
            }
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function check_requests($user_id){
        $row['cols']['friend_id']=$user_id;
        $row['cols']['accepted']=0;
        try{
            $friend_requests=$this->functions->select(false, false, false,false,$row);
            return $friend_requests;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
}
