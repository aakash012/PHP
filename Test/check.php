<<?php
include("database.php");
if($_POST['login'])
{   $un = $_POST['username'];
   $pw = $_POST['password'];
   $query = mysqli_query($conn, "SELECT username,password FROM login_details WHERE username='$un' AND password='$pw'");

   $result = mysqli_query($conn, $query);
   while ($row = mysqli_fetch_assoc($result)) {
       $check_username = $row['username'];
       $check_password = $row['password'];
   }
   if ($un == $check_username && $pw == $check_password)
    {
      if(isset($_POST['remember']))
    {
      setcookie('username',$username,time()+60*60*7);
      setcookie('password',$password,time()+60*60*7);
    }
    session_start();
    $_SESSION['username']=$username;
       header("Location: welcome.php");

   } else {
     echo "username or password wrong!!!";
       header("Location: login.php");
   }
 }
      ?>
