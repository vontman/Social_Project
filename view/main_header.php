<div class="main_header">
    <div class="search">
<div id='search_input_img'>
    <img src='png/search3.png'/>
</div>
<input type="text" id='search_input'>
<div id='search_result_wrapper'>
    <table>
    </table>
</div>
    </div>
    <div class="button_header">
        <!--<ul>-->
            <a href="index.php">Home</a>
            <a href="?user">Profile</a>
        <!--</ul>-->
    </div>
        <script src="js/add_post.js"></script>
        <div id='add_post_wrapper'>
            <div class="add_post">
                <div class='add_post_input'>
                    <textarea id='add_post_body' placeholder="Add Status Update Here ............"></textarea>
                </div>
                <div class='add_post_functions'>
                    <input type='submit' id='add_post_sbmt' value='Add Post' />
                    <select name="add_post_permission" id="permission_select">
                        <option value="2">
                            Friends Only
                        </option>
                        <option value="3">
                            Public
                        </option>
                        <option value="1">
                            Only Me
                        </option>
                    </select>
                </div>
            </div>
            <div id="add_post_toggle"><img src="png/arrow451.png"/></div>
        </div>
</div>
