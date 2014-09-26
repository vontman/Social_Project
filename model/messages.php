<?php

class messages {
    public $link;
    public $date;
    public $functions;
    public function __construct() {
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions();
        $this->functions->table_name='messages';
        $this->link=$this->functions->link;
        $this->date=date("Y/m/d h:m:s",time());
    }
    public function send($user_id,$recieved_id,$message_name,$message_body){
        $input['user_id']=$user_id;
        $input['recieved_id']=$recieved_id;
        $input['name']=$message_name;
        $input['body']=$message_body;
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
        $messages=$this->functions->select($cols, false, array('created'=>'ASC'), false,$row);
        return $messages;
    }
    public function view($user_id,$message_id=false){
        $cols[]='id';
        $cols[]='user_id';
        $cols[]='recieved_id';
        $cols[]='name';
        $cols[]='body';
        $cols[]='created';
        $row=array();
        $row['cols']['user_id']=$user_id;
        $row['cols']['recieved_id']=$user_id;
        $row['relation'][]='OR';
        if($message_id){
            $message=$this->functions->select($cols, $message_id, false, false,$row);
            $seen['seen']=1;
            $this->functions->update($seen, $message_id);
        }
        else{
            $message=$this->functions->select($cols, false, false, false,$row);
        }
        return $message;
    }
    public function check_new($recieved_id){
        $cols[]='id';
        $cols[]='user_id';
        $cols[]='recieved_id';
        $cols[]='name';
        $cols[]='body';
        $cols[]='created';
        $specific_row=array();
        $specific_row['cols']['seen']=0;
        $specific_row['cols']['recieved_id']=$recieved_id;
        try{
            $new_messages=$this->functions->select($cols, false, false, false, $specific_row);
            return $new_messages;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function typing($user_id,$recieved_id){
        $input['user_id']=$user_id;
        $input['recieved_id']=$recieved_id;
        try{
            $this->functions->insert($input);
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
    public function check_typing($user_id,$recieved_id) {
        $specific_row['cols']['user_id']=$user_id;
        $specific_row['cols']['recieved_id']=$recieved_id;
        try{
            $typing=$this->functions->select(false, false, FALSE, false, $specific_row);
            return $typing;
        } catch (Exception $ex) {
            return mysqli_errno($this->link);
        }
    }
}
