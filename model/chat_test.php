

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
    .chat .user_to{
        position:relative;
        height:22px;
        font-size: 18px;
        font-family: cursive;
        line-height: 100%;
        left:50%;
        transform: translateX(-50%);
        display:inline-block;
    }
    .msgs .msg_contain{
        width:100%;
        overflow:hidden;
    }
    .msgs div div{
        max-width: 95%;
        margin:5px 2px;
        padding:5px 2px;
        line-height: 100%;
        display: inline-block;
        font-family: sans-serif;
        font-size:14px;
        font-weight: 300;
        bottom:0;
    }
    .msgs .to{
        float:left;
        background: #ffc8f3;
    }
    .msgs .from{
        float:right;
        background: #68c8f2;
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
<div class="chat" style="overflow-x: hidden;overflow-y: hidden;width:240px;background:lightgray;">
    <div class='user_to'>
        hamada
    </div>
    <div class="messages" style="height:215px;overflow-x:hidden;overflow-y: auto;">
        <div class="msgs" style="width:95%;overflow-x: hidden;overflow-y: auto;background:yellow;">
            <div class='msg_contain'>
                <div class='from'>
                    hamada1
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada2
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada3
                </div>
            </div class='msg_contain'>
            <div>
                <div class='from'>
                    hamada4
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada5
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada1
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada2
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada3
                </div>
            </div class='msg_contain'>
            <div>
                <div class='from'>
                    hamada4
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada5
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada1
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada2
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada3
                </div>
            </div class='msg_contain'>
            <div>
                <div class='from'>
                    hamada4
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada5
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada1
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada2
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada3
                </div>
            </div class='msg_contain'>
            <div>
                <div class='from'>
                    hamada4
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada5
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada1
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada2
                </div>
            </div>
            <div class='msg_contain'>
                <div class='from'>
                    hamada3
                </div>
            </div class='msg_contain'>
            <div>
                <div class='from'>
                    hamada4
                </div>
            </div>
            <div class='msg_contain'>
                <div class='to'>
                    hamada5
                </div>
            </div>
        </div>
    </div>
    <div class="chat_type" style="height:20px;width:100%;">
        <input type="text" placeholder="message" style="width:85%;"><label style="width:14%;background:violet;font-size:18px;height: 100%;">send</label>
    </div>
</div>