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

  $sql="SELECT Count(*) FROM EMP1 where name='Aakash'";
  $result=mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0)
  {
    while ($row=mysqli_fetch_assoc($result)) {
      // echo "EMP ID: {$row['id']} <br>".
      // "EMP NAME:  {$row['name']}<br>".
      // "EMP SALARY: {$row['emp_salary']}<br>".
      // "-------------------------------<br>";
      echo "count enteries: {$row['Count(*)']}<br>";
    }
  }
  else {
    echo "0 records";
  }
  mysqli_close($conn);
  ?>
