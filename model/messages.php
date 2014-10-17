<?php

class messages {
    public $link;
    public $date;
    public $functions;
    public function __construct() {
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions();
        $this->functions->table_name='chat';
        $this->link=$this->functions->link;
        $this->date=date("Y/m/d h:m:s",time());
    }
    public function send($user_id,$recieved_id,$message_body){
        $input['user_id']=$user_id;
        $input['recieved_id']=$recieved_id;
       // $input['name']=$message_name;
        $input['message']= htmlentities($message_body);
        $input['seen']=0;
        $input['created']=$this->date;
        $id=$this->functions->insert($input);
        return $id;
    }
    public function check($user_id){
        $cols[]='id';
        $cols[]='seen';
        $cols[]='user_id';
        $row['cols']['recieved_id']=$user_id;
        $row['cols']['seen']=0;
        $messages=$this->functions->select($cols, false, array('created'=>'DESC'), false,$row);
        return count($messages);
    }
//    public function check_new($recieved_id){
//        $cols[]='id';
//        $cols[]='from';
//        $cols[]='to';
//        $cols[]='name';
//        $cols[]='message';
//        $cols[]='created';
//        $specific_row=array();
//        $specific_row['cols']['seen']=0;
//        $specific_row['cols']['to']=$recieved_id;
//        try{
//            $new_messages=$this->functions->select($cols, false, false, false, $specific_row);
//            return $new_messages;
//        } catch (Exception $ex) {
//            return mysqli_errno($this->link);
//        }
//    }
    public function check_selected($user_id,$friend_id,$last_created){
        $query="SELECT * FROM chat WHERE ((recieved_id=$user_id AND user_id=$friend_id) AND SEEN=0)  ORDER BY created DESC";
        try{
            $sql=  mysqli_query($this->link, $query);
            if(mysqli_affected_rows($this->link)>0){
                while($row=mysqli_fetch_array($sql)){
                    $new_messages[]=$row;
                }
                return $new_messages;
            }else{
                return 0;
            }
        } catch (Exception $ex) {
            echo mysqli_error($this->link);
        }
    }
    public function view($user_id,$recieved_id){
//        $order['created']='DESC';
//        $specific_row['cols']['user_id']=$user_id;
//        $specific_row['cols']['recieved_id']=$recieved_id;
//        $specific_row['cols']['user_id']=$recieved_id;
//        $specific_row['cols']['recieved_id']=$user_id;
//        $specific_row['relation'][]='AND';
//        $specific_row['relation'][]='OR';
//        $specific_row['relation'][]='AND';
//        $messages=$this->functions->select(false, false, $order, false, $specific_row);
//        if($messages){
//            return $messages;
//        }else{
//            return false;
//        }
        $query="SELECT * FROM chat WHERE (user_id=$user_id AND recieved_id=$recieved_id) OR (user_id=$recieved_id AND recieved_id=$user_id) ORDER BY id ASC";
        $sql=  mysqli_query($this->link, $query);
        while($row=  mysqli_fetch_array($sql)){
            $messages[]=$row;
        }
        $query="UPDATE chat SET seen=1 WHERE (user_id=$recieved_id AND recieved_id=$user_id) AND seen=0";
        $sql=  mysqli_query($this->link, $query);
        return $messages;
    }
//    public function view_selected($user_id,$message_id=false){
//        $cols[]='id';
//        $cols[]='from';
//        $cols[]='to';
//        $cols[]='name';
//        $cols[]='message';
//        $cols[]='created';
//        $row=array();
//        $row['cols']['from']=$user_id;
//        $row['cols']['to']=$user_id;
//        $row['relation'][]='OR';
//        if($message_id){
//            $message=$this->functions->select($cols, $message_id, false, false,$row);
//            $seen['seen']=1;
//            $this->functions->update($seen, $message_id);
//        }
//        else{
//            $message=$this->functions->select($cols, false, false, false,$row);
//        }
//        return $message;
//    }
    public function seen($message_ids){
        $update['seen']=1;
        foreach ($message_ids as $k=>$v){
            $message_id=$v['id'];
            $this->functions->update($update, $message_id);
        }
    }
    public function typing($user_id,$recieved_id){
        $input['user_id']=$user_id;
        $input['recieved_id']=$recieved_id;
        $query="INSERT INTO chat_typing(user_id,recieved_id) VALUES ('$user_id','$recieved_id')";
        try{
            $sql=  mysqli_query($this->link, $query);
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function remove_typing($user_id,$recieved_id){
        $input['user_id']=$user_id;
        $input['recieved_id']=$recieved_id;
        $query="DELETE FROM chat_typing WHERE user_id=$user_id AND recieved_id=$recieved_id";
        try{
            $sql=  mysqli_query($this->link, $query);
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function check_typing($user_id,$recieved_id) {
        $specific_row['cols']['user_id']=$user_id;
        $specific_row['cols']['recieved_id']=$recieved_id;
        try{
            $this->functions->table_name='chat_typing';
            $typing=$this->functions->select(false, false, FALSE, false, $specific_row);
            return $typing;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
}
