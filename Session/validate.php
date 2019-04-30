<?php
$myemail="example@gmail.com";
$mypass="123456";
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];

if($email==$myemail and $pass==$mypass)
{
  if(isset($_POST['remember']))
  {
    setcookie('email',$email,time()+60*60*7);
    setcookie('pass',$pass,time()+60*60*7);
  }
  session_start();
  $_SESSION['email']=$email;
  header("location: welcome.php");
}
else {
  echo "email and passwordis invalid. <br> Click <a href='LoginSession.php'>here</a> to login again.";
}
}
else {
  header("location: LoginSession.php");
}
 ?>
