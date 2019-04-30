<?php
include("database.php");
error_reporting();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
  </head>
  <body>
    <div class="container">
      <form action="" method="GET">
        <h2>Sign Up</h2>
        <h5>Please Fill this form to create a account</h5>
        <label for="uname">Username</label><br>
        <input type="text" name="uname" placeholder="enter yout username"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="pass" placeholder="enter your password"><br>
        <label for="cpass">Confirm Password</label><br>
        <input type="password" name="cpass" placeholder="re-enter your password"><br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Reset">
        <h5>Already have an account? <a href="login.php">Login Here.</a> </h5>
      </form>
    </div>
  <?php
  if($_GET['submit'])
  {
    $username=$_GET['uname'];
    $password=$_GET['pass'];
    if($username!="" && $password!="")
    {
      $query="INSERT INTO login_details VALUES('$username','$password')";
      $data=mysqli_query($connection,$query);
      if($data)
      {
        header("Location: register.php");
      }
    }
  }
   ?>
  </body>
</html>
