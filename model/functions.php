<?php

class db_functions{
     public $link;
     public $table_name;
    function __construct() {
        include_once 'connect.php';
        $connect= new db_connect();
        $this->link= $connect->connect();
    }
    public function select($cols=FALSE,$id=FALSE,$order=FALSE,$limit=false,$specific_row=false,$table_join=false){
        $query="SELECT ";
        if($cols && $table_join){
            foreach ($cols as $k=>$v){
                $cols_input=$k.".".$v;
            }
            $query.=" $cols_input ";
        }elseif($cols){
            $cols_input=  implode(",", $cols);
            $query.="$cols_input ";
        }elseif($table_join){
            $query.="$this->table_name.*";
        }else {
            $query.="* ";
        }
        $query.="FROM $this->table_name ";
        if($table_join){
            $query.=" JOIN ".$table_join." ";
        }
        if($specific_row){
            $query.=" WHERE ";
            $i=0;
            if($id){
                $query.=" id=".$id." AND (";
            }else{
                $query.=" ( ";
            }
            $count=count($specific_row['cols']);
            foreach($specific_row['cols'] as $k=>$v){
                if($i>0){
                    if(@$specific_row['relation']){
                        $query.=" ".$specific_row['relation'][$i-1]." ";
                    }
                    else{
                        $query.=" AND ";
                    }
                    if($i%2==0 && $i>1){
                        $query.=' ( ';
                    }
                }
                $query.=" ".$k."='".$v."' ";
                $i++;
                if($i%2==0 && $i>1 && $i<$count){
                    $query.=' ) ';
                }
            }
            $query.=" ) ";
        }
        elseif($id){
           $query.="WHERE id=$id ";
        }
        if($order){
           $query.="ORDER BY ";
           foreach ($order as $key => $value) {
               $query.=$key." ".$value." ";
            }
        }
         if($limit){
            foreach ($limit as $key => $value) {
                $items_no=$key;
                if($value==1){
                    $set_no=0;
                }
                else{
                    $set_no=($key*$value)-$key;
                }
                $query.="LIMIT  $set_no , $items_no";
//                $query.="LIMIT 1,1";
             }
        }

        try{
            $sql= mysqli_query($this->link, $query);
//            echo $query;
            if(mysqli_affected_rows($this->link)>0){
                while($rows = mysqli_fetch_array($sql)){
                     $array[]=$rows;
                }
                return $array;
//                return $query;
            }
            else {                      
                return mysqli_affected_rows($this->link);
//                return $query;
            }
        } catch (Exception $ex) {
                return mysqli_errno($this->link);
        }
    }
    public function insert($input){
            $input_adds=implode("','",$input);
            $input_cols=implode(",",array_keys($input));
            $query="INSERT INTO $this->table_name ($input_cols) VALUES ('$input_adds')";
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
                return mysqli_affected_rows($this->link);
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
