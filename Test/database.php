<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="signup";
$connection=mysqli_connect($servername,$username,$pass,$dbname);
if(!$connection)
{
  echo "Connection failed";
}
else {
  echo "Connection Established<br>";
}
?>
