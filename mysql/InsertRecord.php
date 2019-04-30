<?php
  $host='localhost:3306';
  $user='root';
  $pass='';
  $dbname='MYDB';
  $conn=mysqli_connect($host,$user,$pass,$dbname);
  if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
  }
  echo "Connected Successfully<br/>";

  $sql='INSERT INTO EMP1(id,name,emp_salary) VALUES (7,"Manoj",50000)';
  if(mysqli_query($conn,$sql)){
    echo "Record inserted Successfully";
  }else {
    echo "Could not insert record: ".mysqli_error($conn);
  }
  mysqli_close($conn);
 ?>
