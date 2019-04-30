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

$sql="drop table EMP1";
if(mysqli_query($conn, $sql))
{
  echo "Record Droped successfully";
}
else {
  echo "Error droping record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>
