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
?>
