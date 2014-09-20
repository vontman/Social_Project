<?php

class db_functions{
     public $link;
     public $table_name;
    function __construct() {
        include_once './connect.php';
        $connect= new db_connect();
        $this->link= $connect->connect();
    }
    public function select($cols=FALSE,$id=FALSE,$order=FALSE,$limit=false){
        $query="SELECT ";
        if($cols){
            $query.="$cols ";
        }
        else {
            $query.="* ";
        }
        $query.="FROM $this->table_name ";
        if($id){
           $query.="WHERE id=$id ";
        }
        if($order){
           $query.="ORDER BY ";
           foreach ($order as $key => $value) {
               $query.=$key." ".$value;
            }
        }
         if($limit){
            foreach ($limit as $key => $value) {
                $set_no=$value-1;
                $items_no=$value*$key;
                $query.="LIMIT  $set_no , $items_no";
             }
        }
        try{
            $sql= mysqli_query($this->link, $query);
            if(mysqli_affected_rows($this->link)<0){
                while($row = mysql_fetch_array($query)){
                     $array[]=$row;
                }
                return $array;
            }
            else {                      
                return mysqli_affected_rows($this->link);
            }
        } catch (Exception $ex) {
                return mysqli_errno($this->link);
        }
    }
    public function insert($input){
            $input_adds=implode("','",$input);
            $input_cols=implode(",",array_keys($input));
            $query="INSERT INTO $this->tablename ($input_cols) VALUES ('$input_adds')";
            try{
                $sql=  mysqli_query($this->link, $query);
                return mysqli_insert_id($this->link);
//                return $query;
            } catch (Exception $ex) {
                return mysqli_errno($this->link);
            }
        }
    public function update($update,$id){
            $query="UPDATE $this->table_name SET ";
            $i=0;
            foreach($update as $k=>$v){
                if($i>0){
                    $query.=", ";
                }
                $query.=$k."='".$v."' ";
                $i++;
            }
            $query.="WHERE id='$id'";
            try{
                $sql=  mysqli_query($this->link, $query);
                return mysqli_insert_id($this->link);
            } catch (Exception $ex) {
                return mysqli_errno($this->link);
            }
        }
    public function delete($id){
            $query="DELETE FROM $this->table_name WHERE id=$id";
            try{
                $sql=  mysqli_query($this->link, $query);
                return mysqli_affected_rows($this->link);
            } catch (Exception $ex) {
                return mysqli_errno($this->link);
            }   
        }
    }
