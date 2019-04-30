<?php
setcookie("name","",time()-60,"/","",0);
setcookie("age","",time()-60,"/","",0);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deleting Cookie</title>
  </head>
  <body>
    <?php
    echo "Cookie Deleted"; ?>
  </body>
</html>
