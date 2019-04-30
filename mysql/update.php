<?php
include("student1.php");
error_reporting(0);
$_GET['rn'];
$_GET['sn'];
$_GET['cl'];
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br> <h1>WELCOME</h1>
     <form action="" method="GET">
       Registration No. <input type="text" name="roll" value=""><?php $_GET['rn']; ?><br><br>
       Name <input type="text" name="name" value=""><?php $_GET['sn']; ?><br><br>
       Class <input type="text" name="class" value=""><?php $_GET['cl']; ?><br><br>
       <input type="submit" name="submit" value="Update"><br>
     </form>
     <?php
     if($_GET['submit'])
     {
       $rollno=$_GET['roll'];
       $name=$_GET['name'];
       $class=$_GET['class'];
       $query="UPDATE student_info SET Name='$name',class='$class' WHERE roll='$rollno'";
       $data=mysqli_query($connection,$query);
       if($data)
       {
        echo "<fontcolor='green'>Record updated successfully";
       }
       else{
         echo "Failed to update";
       }
     }
      ?>
  </body>
</html>

<!-- <td><a href="update1.php?rn=$result[roll]$sn=$result[Name]&cl=$result[class]">Edit</a></td> -->
