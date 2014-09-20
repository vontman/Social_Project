<?php

class db_con {
    public $link;
    public function connect() {
        try{
            $this->link=  mysqli_connect('localhost', 'root','', 'social_project');
            return $this->link;
        } catch (Exception $ex) {
        return mysqli_errno($this->link);
        }
    }
}
