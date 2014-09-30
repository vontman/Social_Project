<?php
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
                        <div class="add_friend_sbmt">Add Friend</div>
            </td>
        </tr>
            <?php
    }
}
    