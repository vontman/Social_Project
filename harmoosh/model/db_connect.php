<?php

class db_connect {

    public $link;

    public function connect() {
        try {
            $this->link = mysqli_connect("localhost", "root", "", "union_db");
            return $this->link;
        } catch (Exception $exc) {
            return $exc->getMessage();
        }
    }

}

