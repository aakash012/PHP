<?php
  $servername="localhost";
  $username="root";
  $pass="";
  $connection=mysqli_connect($servername,$username,$pass);
  if(!$connection)
  {
    echo "Connection failed";
  }
  else {
    echo "Connection Established";
  }
  $sql="CREATE DATABASE dNEW1";
  if(mysqli_query($connection,$sql)){
    echo "Database created successfuly!";
  }
  else{
    echo "Error creating database: ".mysqli_error($connection);
  }
  $sqll="CREATE TABLE MyGuests(
    id INT(6), firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL , email VARCHAR(50) )";
    if(mysqli_query($connection,$sqll))
    {
      echo "Table MyGuests created successfully";
    }
  mysqli_close($connection);
 ?>
