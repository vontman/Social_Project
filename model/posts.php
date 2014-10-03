<?php
class posts{
    public $link;
    public $functions;
    public $date;
    public function __construct() {
        include_once 'connect.php';
        include_once 'functions.php';
        $this->functions=new db_functions();
        $this->functions->table_name='posts';
        $this->link=$this->functions->link;
        $this->date=date('Y/m/d h:i:s', time());
    }
    public function add_post($user_id,$post_body,$permission,$image_name=false){
        $post_body= mysqli_real_escape_string($this->link,$post_body);
        $post['body']=  htmlentities($post_body);
        $post['user_id']=$user_id;
        $post['permission']=$permission;
        $post['created']=$this->date;
        if($image_name){
            $post['image']=$image_name;
        }
        try{
            $post_id=$this->functions->insert($post);
            return $post_id;
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function view_posts($user_id,$set_no){
        include_once 'friends.php';
        $friends=new friends();
        $user_friends=$friends->view_friends($user_id);
        $i=0;
        foreach($user_friends as $k=>$v){
            $specific_row['cols']['user_id']=$v;
            if($i<count($user_friends)){
                $specific_row['relation'][]='OR';
            }
            $i++;
        }
        $order['created']='DESC';
        $limit[$set_no]=15;
        try{
            $posts=$this->functions->select(array('id','user_id','body','created','last_edit','permission'), FALSE, $order, $limit,$specific_row);
            return $posts;
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function edit_post($user_id,$post_id,$post_update_body){
        $specific_row['cols']['user_id']=$user_id;
        try{
            $post=$this->functions->select(false, $post_id, false, false, $specific_row);
            if($post){
                $post_update_body=mysqli_real_query($this->link, $post_update_body);
                $post_update['body']=  htmlentities($post_update_body);
                $post_update_body['last_edit']=$this->date;
                return $this->functions->update($post_update, $post_id);
            }else{
                die("Error !!");
            }
        } catch (Exception $ex) {
            echo mysqli_errno($this->link);
        }
    }
    public function delete_post($user_id,$post_id){
        $specific_row['cols']['user_id']=$user_id;
        try{
            $post=$this->functions->select(false, $post_id, false, false, $specific_row);
            if($post){
                return $this->functions->delete($post_id);
            }else{
                die("Error !!");
            }
        } catch(Exception $ex){
            echo mysqli_errno($this->link);
        }
    }
}