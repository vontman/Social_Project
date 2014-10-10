

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
        $('.chat_input').keypress(function(key){
            if(key.which == 13) {
                 $.ajax({url:'chat.php',
                Type:'POST',
                data:{msg:msg},
                    success:function(){
                        alert('done');
                    }
            });
            }
        });
    });
</script>
<style>
    .chat{
        overflow: hidden;
        width:250px;
        box-shadow: -2px -2px 10px ;
    }
    .messages{
         height:215px;
         overflow-x:hidden;
         overflow-y: auto;
    }
    .msgs{
        padding:10px 5px;
        width:95%;
        overflow-x:hidden;
        overflow-y: auto;
        background:whitesmoke;
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
    .msgs .msg_contain div{
        max-width: 95%;
        margin:5px 2px;
        padding:10px 5px;
        line-height: 100%;
        display: inline-block;
        font-family: sans-serif;
        font-size:14px;
        font-weight: 700;
        bottom:0;
        word-wrap: break-word;
    }
    .msgs .to{
        float:left;
        background: rgba(176, 186, 247, 0.6);
        border-radius: 4px 10px 10px 4px ;
        box-shadow: -2px 2px 10px;
    }
    .msgs .from{
        float:right;
        background: rgba(198, 104, 185, 0.3);
        border-radius: 10px 10px 4px 4px ;
        box-shadow: 2px 2px 10px;
    }
    .chat_input{
        width:101%;
        height: 35px;
        padding: 8px 12px;
        resize:none;
        word-break: break-all;
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
<div class="chat" >
    <div class='user_to'>
        hamada
    </div>
    <div class="messages">
        <div class="msgs" >
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
                    hamada3 hamada3 hamada3 hamada3 hamada3 hamada3 hamada3 hamada3 hamada3
                </div>
            </div>
            <div class='msg_contain'>
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
            </div>
            <div class='msg_contain'>
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
            </div>
            <div class='msg_contain'>
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
            </div>
            <div class='msg_contain'>
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
            </div>
            <div class='msg_contain'>
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
            </div>
            <div class='msg_contain'>
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
    <div class="chat_type" style="overflow:hidden;width:100%;">
        <textarea class='chat_input'></textarea>
    </div>
</div>