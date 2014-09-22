<?php
class db_function{
    public $link;
    public $table_name;
  
    function __construct(){
    include_once ('db_connect.php');
    $connect = new db_connect();
    $this->link = $connect->connect();
    }

function insert($array){
    $table_name =$this->table_name;
    $keys = implode(",", array_keys($array));
    $values = implode("'".","."'", array_values($array));
    $query=  ( "INSER INTO $table_name VALUES (NULL,"."$values) ");
    try {
        $sql =  mysqli_query($this->link, $query);
        } catch (Exception $exc) {
        return mysqli_errno($this->link);
    }
    return mysqli_insert_id($this->link);
  }
  function delete($id,$input=FALSE){
      $table_name =$this->table_name;
      if($input=FALSE){
      $query = ("DELETE FROM $table_name WHERE id='$id'");
      }  else {
      foreach ($input as $key => $value) {
             $query="DELETE FROM $key ='$value' ";
      }
    }
      try {
        $sql =  mysqli_query($this->link, $query);
        } catch (Exception $exc) {
        return mysqli_errno($this->link);
    }
  }
  function update($id,$input){
      $table_name =$this->table_name;
      
     echo $query= "UPDATE $table_name SET $update";
     foreach ($input as $key => $value) {
         $update=$key ."='".$value."'";
     }
     $up =  implode($update, ",");
    
  }
}
// UPDATE users SET username='hamada' , email='ellol#.com' , firstname='sajdfo' WHERE id=$id