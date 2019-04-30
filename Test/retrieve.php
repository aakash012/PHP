<?php
$host='localhost:3306';
$user='root';
$pass='';
$dbname='signup';
$conn=mysqli_connect($host,$user,$pass,$dbname);
if(!$conn){
  die('Could not connect: '.mysqli_connect_error());
}
echo "Connected Successfully<br/>";
$sql="SELECT username,password FROM login_details";

if ($result=mysqli_query($conn,$sql))
  {
  while ($row=mysqli_fetch_row($result))
    {
    printf ("%s (%s)\n",$row[0],$row[1]);
    }
  mysqli_free_result($result);
}

mysqli_close($conn);
?>
