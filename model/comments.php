<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of comments
 *
 * @author omar
 */
class comments {
    public $link;
    public $functions;
    public $date;
    public function __construct() {
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions();
        $this->link=$this->functions->link;
        $this->functions->table_name="comments";
        $this->date=date('Y/m/d h:i:s', time());
    }
    public function add_comment($user_id,$post_id,$comment_body){
        $comment['user_id']=$user_id;
        $comment['post_id']=$post_id;
        $comment['body']=$comment_body;
        $comment['created']=$this->date;
        try{
            $comment_id=$this->functions->insert($comment);
            return $comment_id;
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function delete_comment($user_id,$comment_id){
        try{
            $specific_row['cols']['user_id']=$user_id;
            $check=$this->functions->select(array('id'), $comment_id, false, false, $specific_row);
            if($check){
                return $this->functions->delete($comment_id);
            }else{
                die("User Not Valid !");
            }
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function edit_comment($user_id,$comment_id,$comment_body){
        try{
            $specific_row['cols']['user_id']=$user_id;
            $check=$this->functions->select(array('id'), $comment_id, false, false, $specific_row);
            if($check){
                $comment_edit['body']=$comment_body;
                $comment_edit['last_edit']=$this->date;
                return $this->functions->update($comment_id);
            }else{
                die("User Not Valid !");
            }
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function view_comments($post_id,$set_no){
        $order['date']='DESC';
        $limit[$set_no]=5;
        $specific_row['cols']['post_id']=$post_id;
        try{
            $comments=$this->functions->select(false, false, $order, $limit, $specific_row);
            if($comments!=0){
                return $comments;
            }
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
}
