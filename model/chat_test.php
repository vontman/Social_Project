

<script src="../js/jquery-1.11.0.js"></script>
<script>
    $(document).ready(function(){
       console.log('YES !!'); 

        $('.user_submit').click(function(){
            var form=$(this);
            var view=form.siblings('.view');
            var user_id=form.siblings('.user').val();
            form.siblings('.user').hide();
            setInterval(function(){
                console.log("lol!!");
                $.ajax({url:'chat.php',
                    data:{user_id:user_id},   
                    success:function(lol){
                        view.text(lol);
                    }
                });
            },1000);
        });
        $('.send').click(function(){
            var form=$(this);
            var msg=form.siblings('.user_send').val();
            var to=form.siblings('.user_to').val();
            $.ajax({url:'chat.php',
                dataType:'json',
                data:{msg:msg,to:to},
                    success:function(lol){
                        form.siblings('.done').append(lol);
                    }
            });
        });
        var scroll=$('.msgs').height();
        $('.messages').scrollTop(scroll);
    });
</script>
<style>
    .msgs{
        padding:10px 5px;
        
    }
    .msgs div{
        max-width: 95%;
        background:red;
        margin:5px 2px;
        padding:5px 2px;
        line-height: 100%;
        bottom:0;
    }
</style>
<div style="width:45%;float:left;">
    <input name='user' class="user" align='left' type=text placeholder="send" >
    <label class="user_submit">user</label><br>
    <input class="user_send" type="text">
    <input class="user_to" type="text" placeholder="to">
    <label class="send">send</label><br>
    <textarea class="view">message</textarea><br>
    <label class="done">!</label>
</div>

<div style="width:45%;float:left;">
    <input name='user' class="user" type=text placeholder="send">
    <label class="user_submit">user</label><br>
    <input class="user_send" type="text">
    <input class="user_to" type="text" placeholder="to">
    <label class="send">send</label><br>
    <textarea class="view">message</textarea><br>
    <label class="done">!</label>
</div>
<div class="chat" style="overflow-x: hidden;overflow-y: hidden;width:240px;height:240px;background:lightgray;">
    <div class="messages" style="height:215px;overflow-x:hidden;overflow-y: auto;">
        <div class="msgs" style="width:95%;overflow-x: hidden;overflow-y: auto;background:yellow;">
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
            <div>
                hamada1
            </div>
            <div>
                hamada2
            </div>
            <div>
                hamada3
            </div>
            <div>
                hamada4
            </div>
        </div>
    </div>
    <div class="chat_type" style="height:20px;width:100%;">
        <input type="text" placeholder="message" style="width:85%;"><label style="width:14%;background:violet;font-size:18px;height: 100%;">send</label>
    </div>
</div>