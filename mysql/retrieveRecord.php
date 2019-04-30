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

$sql='SELECT * FROM EMP1';
$result=mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result))
  {
    echo "EMP1 ID: {$row['id']} <br>".
    "EMP1 NAME:  {$row['name']}<br>".
    "EMP SALARY: {$row['emp_salary']}<br>".
    "-------------------------------<br>";
  }
}else {
  "0 results";
}
mysqli_close($conn);
?>
