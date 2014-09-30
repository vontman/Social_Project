<?php
include_once 'friends.php';
$friends=new friends();
if(isset($_GET['keywords'])){
    $keywords=$_GET['keywords'];
    include_once './users.php';
    $users=new users();
    $results=$users->search($keywords);
    foreach ($results as $k=>$v){
        ?><tr>
            <td>
                <img src='../user.png'/>
            </td>
            <td>
                <a href='?user=<?php echo $v['id'];?>'>
                    <div class="search_results">
                        <div class="search_username"><?php echo $v['username']; ?></div>
                    </div>    
                </a>
                        <div class="add_friend" user='<?php echo $v['id']; ?>'>Add Friend</div>
            </td>
        </tr>
            <?php
    }
}elseif (isset($_GET['friend_id'])) {
    $friend_id=$_GET['friend_id'];
//    $user_id=$_SESSION['alterwire'];
    $user_id=2;
    echo $friends->add_friend($user_id,$friend_id);
}
    