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
        $('#search_input').keyup(function(){
            $('#search_result_wrapper ul').children('a').remove();
            if($(this).val().length>2){
                $('#search_result_wrapper').show();
                var keywords=$(this).val();
                var newli;
                var newli_edit;
               $.ajax({url:'search.php',
                   data:{keywords:keywords},
                   success:function(srch_results){
                            newli='<a href="?user='+srch_results+'"><li>';
                           newli_edit=newli+srch_results+'</li></a>';
                            $('#search_result_wrapper ul').append(newli_edit);
                       }
                   }
                );
            }
        });
    });
</script>

<input type="text" id='search_input' placeholder="Enter keywords .....">
<div id='search_result_wrapper' style='background:lightgrey;overflow:hidden;'>
    <ul>
    </ul>
</div>
