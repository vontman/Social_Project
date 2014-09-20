<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src='js/jquery-1.11.0.js'></script>
    </head>
    <body>
        <script>
            $(document).ready(function(){
               $('.one').click(function(){
                console.log("kjkjkj");
                   var trgt=$(this).attr("target");
                   $('.'+trgt).toggle('slow');
                   $(this).children('.div2').toggle('slow');
               });
               $('.two').click(function(){
                console.log("kjkjkj");
                   var trgt=$(this).attr("target");
                   $('.'+trgt).toggle('slow');
               });
                $('.three').click(function(){
                console.log("kjkjkj");
                   var trgt=$(this).attr("target");
                   $('.'+trgt).toggle('slow');
               });
                $('.four').click(function(){
                console.log("kjkjkj");
                   var trgt=$(this).attr("target");
                   $('.'+trgt).toggle('slow');
               });
            });
        </script>
        <div class='one' target='div'>one </div>      
        <div class='div two' target='div2'>two </div>
        <div class='div2' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div2' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div2' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div2' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div2' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>  
        <div class='div three' target='div3'>two </div>
        <div class='div3' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div3' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div3' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div3' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div3' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>  
        <div class='div four' target='div4'>two </div>
        <div class='div4' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div4' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div4' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div4' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
        <div class='div4' style='background:red;'>asdasfdsafd<br>asdfasdf<br></div>
    </body>
</html>
