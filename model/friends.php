<?php

class friends {
    public $link;
    public $functions;
    public $date;
    public function __construct(){
        include_once './connect.php';
        include_once './functions.php';
        $this->functions=new db_functions;
        $this->functions->table_name='users';
        $this->link=$this->functions->link;
        $this->date=date('Y/m/d h:i:s', time());
    }
}
