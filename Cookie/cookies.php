<?php
$cookie_name="user";
$cookie_value="ABC";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Cookie</title>
   </head>
   <body>
     <?php
        if(!isset($_COOKIE[$cookie_name])){
          echo "Cookie named '". $cookie_name."' is not set!";
        }
        else {
          echo "Cookie '".$cookie_name."' is set!<br>";
          echo "Value is: ".$_COOKIE[$cookie_name];
        }
      ?>
   </body>
 </html>
