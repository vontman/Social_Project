<?php
if(isset($_GET['keywords'])){
    $keywords=$_GET['keywords'];
    include_once './users.php';
    $users=new users();
    $results=$users->search($keywords);
    foreach ($results as $k=>$v){
        foreach($v as $k2=>$v2){
            echo $v2;
        }
    }
}
    