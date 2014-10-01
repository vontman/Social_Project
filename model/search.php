<?php
@session_start();
include_once 'friends.php';
$friends=new friends();
    $user_id=$_SESSION['alterwire'];
if(isset($_GET['keywords'])){
    $keywords=$_GET['keywords'];
    include_once 'users.php';
    $users=new users();
    $results=$users->search($keywords);
    foreach ($results as $k=>$v){
        if($v['id']!=$user_id){ ?>
            <tr>
                <td>
                    <img class='srch_user_pic' src='user.png'/>
                </td>
                <td>
                    <a href='?user=<?php echo $v['id'];?>'>
                        <div class="search_results">
                            <div class="search_username"><?php echo $v['username']; ?></div>
                        </div>    
                    </a>
                    <?php
                        $already_friends=$friends->check_friends($user_id,$v['id']);
                    ?>
                            <?php
                                if(!$already_friends){?>
                                    <div class="add_friend" user='<?php echo $v['id']; ?>'>Add Friend</div>
                                    <?php
                                }elseif($already_friends==1){?>
                                    <div class="friend"><img src='png/spinner4.png'/>Request Sent</div><?php
                                }elseif($already_friends==2){?>
                                    <div class="friend"><img src='png/profile11.png'/>Friends</div><?php
                                }
                            ?>
                </td>
            </tr>
        <?php 
        
        }
    }
}elseif (isset($_GET['friend_id'])) {
    $friend_id=$_GET['friend_id'];
    echo $friends->add_friend($user_id,$friend_id);
}
    