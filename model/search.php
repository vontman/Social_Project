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
                <div>
                    <a href='?user=<?php echo $v['id'];?>'><?php echo $v['username']; ?></a>
                </div>
            </td>
        </tr>
            <?php
    }
}
    