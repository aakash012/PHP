<?php
include("database.php");
error_reporting();
if(isset($_POST['login']))
{
  $username=$_POST['uname'];
  $passwords=$_POST['pass'];

if($username==$myusername and $password==$mypassword)
{
  if(isset($_POST['remember']))
  {
    setcookie('username',$username,time()+60*60*7);
    setcookie('password',$password,time()+60*60*7);
  }
  session_start();
  $_SESSION['username']=$username;
  header("location: welcome.php");
}
else {
  echo "username and password is invalid. <br> Click <a href='Login.php'>here</a> to login again.";
}
}
else {
  header("location: LoginSession.php");
}
 ?>
