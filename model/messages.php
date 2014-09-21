<?php

class messages {
    public $link;
    public $date;
    public $functions;
    public function __construct() {
        include_once './connect.php';
        include_once './functions.php';
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
        $id=$this->functions->insert($input);
        return $id;
    }
}
