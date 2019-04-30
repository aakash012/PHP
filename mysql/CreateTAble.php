<?php
$host = 'localhost:3306';
$user = 'root';
$pass = '';
$dbname = 'MYDB';
$conn = mysqli_connect($host, $user, $pass, $dbname);
if(! $conn )
{
	die('could not connect:' . mysqli_connect_error());
}
echo 'Connected Successfully</br>';

$sql = "create table EMP1 (id INT AUTO_INCREMENT, name VARCHAR(20) NOT NULL,
emp_salary INT NOT NULL, primary key(id))";
/*$sql ="CREATE TABLE subject_tb1 (".
	"subject_id INT NOT NULL AUTO_INCREMENT,".
	"subject_title VARCHAR(100) NOT NULL, ".
	"subject_author VARCHAR(40) NOT NULL,".
	"submission_date DATE,".
	"PRIMARY KEY (subject_id));";*/
//mysql_select_db('T1');
if(mysqli_query($conn, $sql)){
	echo "Database MYBD created successfully.";
}else{
	echo "Sorry, Database creation failed ".mysqli_error($conn);
}
mysqli_close($conn);
?>
