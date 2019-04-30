<?php
  include("student1.php");
  $query="INSERT INTO student_info VALUES('1','Manoj','K1618')";
  $data=mysqli_query($connection,$query);
  if($data)
  {
    echo "Data inserted into database";
  }
  else{
    echo "Failed to insert";
  }
 ?>
