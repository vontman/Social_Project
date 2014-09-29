<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <form method="Get" action="view/profile.php">
    <div class="sidebar l-sidebar">
        <div class="user">
            <img src="user.png">
            <a href="?user"><div name="profile"><h3><?php echo $user['username']; ?></h3></div></a>
        </div>
        <ul class="mains">
            <li>News Feed</li>
            <li>Messages</li>
            <li>Events</li>
            <li>Photos</li>
            <!--<iframe class="cal" src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=200&amp;wkst=1&amp;bgcolor=%23333333&amp;src=%23contacts%40group.v.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Africa%2FCairo" style=" border-width:0; background-color: #0c383e; " width="190" height="200" frameborder="0" scrolling="no" margin-top="10px "></iframe>-->
            <div class='calender'></div>
        </ul>
    
        
    </div>
    </form>