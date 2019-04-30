<?php
setcookie("name","Aakash", time()+3600, "/","", 0);
setcookie("age","21", time()+3600, "/", "", 0);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Setting Cookies with PHP</title>
   </head>
   <body>
     <?php
     echo "Set Cookies";
      ?>
   </body>
 </html>
