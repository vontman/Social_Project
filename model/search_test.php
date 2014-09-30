<script src='../js/jquery-1.11.0.js'></script>
<script>
    $(document).ready(function(){
        console.log('hi');
//       $('#search_input').keypress(function(key){
//           if(key.which==13){
//               alert($(this).val());
//           }
//       });
        $('#search_result_wrapper').hide();
        var srch_click=false;
        $('#search_input_img').click(function(){
            if(!srch_click){
                $('#search_input').css('width','240px');
                $('#search_input').css('padding','4px 8px 4px 32px');
                $('#search_input').focus();
                $(this).css('transform','rotate(360deg)');
                srch_click=true;
            }else{
                $('#search_input').css('padding','0');
                $('#search_input').css('width','30px');
                $(this).css('transform','rotate(-360deg)');
                srch_click=false;
            }
        });
        $i=0;
        $('#search_input').keyup(function(){
            $('#search_result_wrapper table').children().children('tr').remove();
            if($(this).val().length>2){
                var keywords=$(this).val();
               $.ajax({url:'search.php',
                   data:{keywords:keywords},
                   success:function(srch_results){
                        if(srch_results){
                            $('#search_result_wrapper table').append(srch_results);
                            if($i==0){
                                $('#search_result_wrapper').slideDown('fast');
                            }
                            $i++;
                        } 
                       }
                   }
                );
            }
        });
    });
</script>
<style>
    #search_input{
        border-radius:15px; 
/*        background:url('../png/search.png');
        background-size: contain;
        background-repeat: no-repeat;*/
        height:30px;
        width:30px;
        transition:all .45s ease;
        box-shadow: 2px 2px 8px;
        border-color: #dedff6;
    }
    #search_input_img img{
        position: absolute;
        height:30px;
        cursor: pointer;
    }
    #search_result_wrapper{
        display: none;
        margin-top:15px;
    }
    #search_result_wrapper table{
        background:lightgrey;
        padding: 0;
        border-radius:4px;
        box-shadow: 10px 10px 20px black;
    }
    #search_result_wrapper *{
        transition:all .45s ease;
    }
    #search_result_wrapper table tr{
        background:#dedff6;
        width:350px;
        height:48px;
        display:block;
        cursor:pointer;
        overflow:hidden;
        border-bottom:2px groove rgba(0,0,0,.15);
    }
    #search_result_wrapper table tr:hover{
        background:#6367de;
    }
    #search_result_wrapper table td{
        height:48px;
    }
    #search_result_wrapper td a{
        float:left;
        display:block;
        text-decoration: none;
        color:#000383;
        font-size:18px;
        height:100%;
    }
    .search_results{
        width:300px;
        overflow:hidden;
    }
    .search_username{
        float:left;
        max-width:60%;
    }
    #search_result_wrapper table tr:hover .search_username{
        color:whitesmoke;
    }
    .add_friend_sbmt{
        position: absolute;
        width: 85px;
        padding: 2px;
        text-align: center;
        background: #bce8f1;
        color: #0070a3;
        border-radius: 4px;
        overflow: hidden;
        margin: 0 10px;
        box-shadow: 2px 2px 10px black;
        z-index: 99;
        font-size: 14px;
        font-weight: bold;
        left: 250px;
        margin-top: 15px;
    }
    .add_friend_sbmt:hover{
        color:whitesmoke;
        background: #ac52c2;
    }
    #search_result_wrapper td img{
        float:left;
        height:100%;
    }
</style>
<div id='search_input_img'>
    <img src='../png/search2.png'/>
</div>
<input type="text" id='search_input'>
<div id='search_result_wrapper'>
    <table>
        
    </table>
</div>
