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
        $('#search_input').click(function(){
           $(this).css('padding','4px 24px');
           $(this).css('width','240px')
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
        background:url('../png/search.png');
        background-size: contain;
        background-repeat: no-repeat;
        height:30px;
        width:30px;
        transition:all .45s ease;
        box-shadow: 2px 2px 8px;
        border-color: #dedff6;
    }
    #search_result_wrapper{
        display: none;
    }
    #search_result_wrapper table{
        width:350px;
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
        height:48px;
        display:block;
        cursor:pointer;
        overflow:hidden;
        border-bottom:2px groove rgba(0,0,0,.15);
    }
    #search_result_wrapper table tr:hover{
        background:#6367de;
    }
    #search_result_wrapper table tr:hover a{
        color:whitesmoke;
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
    }
    #search_result_wrapper td div{
        display:block;
        min-width:75%;
        overflow:hidden;
    }
    #search_result_wrapper td img{
        float:left;
        height:100%;
    }
</style>
<input type="text" id='search_input'>
<div id='search_result_wrapper'>
    <table>
        
    </table>
</div>
