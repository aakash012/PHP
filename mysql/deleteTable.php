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

$sql="DELETE FROM EMP1 WHERE id=4";
if(mysqli_query($conn, $sql))
{
  echo "Record Deleted successfully";
}
else {
  echo "Error deleting record: ".mysqli_error($conn);
}
mysqli_close($conn);
?>
