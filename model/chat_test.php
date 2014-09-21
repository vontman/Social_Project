

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
    });
</script>
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
