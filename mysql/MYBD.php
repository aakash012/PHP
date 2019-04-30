<?php
$host='localhost:3306';
$user='root';
$pass='';
$conn=mysqli_connect($host,$user,$pass);
if(!$conn){
    die('Could not connect: '.mysqli_connect_error());
}
echo 'Connected Successfully<br/>';
$sql='CREATE Database MYDB';
if(mysqli_query($conn,$sql)){
    echo "Database MYDB created successfully";
}
else{
    echo "Sorry, the database creation failed ".mysqli_error($conn);
}
mysqli_close($conn);
?>
