<?php
include("student1.php");
error_reporting();
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
    <br> WELCOME
     <form action="" method="GET">
       Roll No <input type="text" name="roll" value=""><br><br>
       Name <input type="text" name="name" value=""><br><br>
       Class <input type="text" name="class" value=""><br>
       <input type="submit" name="submit" value="Submit"><br>
     </form>
     <?php
     if($_GET['submit'])
     {
       $rn=$_GET['roll'];
       $sn=$_GET['name'];
       $cl=$_GET['class'];
       if($rn!="" && $sn!="" && $cl!="")
       {
         $query="INSERT INTO student_info VALUES('$rn','$sn','$cl')";
         $data=mysqli_query($connection,$query);
         if($data)
         {
           echo "<br><br>Data inserted into database";
         }
       }
     }
      ?>
   </body>
 </html>
