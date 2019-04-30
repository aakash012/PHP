<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accessing Cookie with php</title>
  </head>
  <body>
    <?php
      echo $_COOKIE["name"]."<br/>";
      /* is equivalent to */
      // echo $HTTP_COOKIE_VARS["name"].<br/>";

      echo $_COOKIE["age"]."<br/>";
      /* is equivalent to */
      //echo "$HTTP_COOKIE_VARS["age"]."<br/>"";
      
      print_r($_COOKIE);
     ?>
  </body>
</html>
