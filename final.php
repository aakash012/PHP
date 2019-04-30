<form action="final.php" method="post" align="left">
  Name: <br><input type="text" name="name"><br>
  E-mail:<br><input type="text" name="email"><br>
  Phone Number:<br><input type="text" name="phno"><br>
  Password:<br><input type="password" name="pass"><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"></textarea><br>
  Gender:<br>
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><input type="submit" name="submit">
</form>

<?php
if(isset($_POST['submit']))
{
  $error="";
  $a=$_POST['name'];
  if(empty($a))
  {
    echo "name not found<br>";
  }
  else {
    if(strlen($a)<6 || !preg_match("/^[a-zA-Z'-]$/",$a))
    {
      echo "name invalid<br>";
    }
    else {
      echo "valid name entered";
    }
  }
  $c=$_POST['phno'];
  if(preg_match("/^[0-9]{10}+$/",$c))
  {
    echo "mobile number is valid";
  }
  else {
    echo "phno invalid";
  }
  $d=$_POST['email'];
  if(empty($d))
  {
    echo "email required";
  }
  elseif (filter_var($d,FILTER_VALIDATE_EMAIL)) {
    # code...
    echo $d;
  }
  else {
    echo $d." is not a valid email address<br>";
  }
  $e=$_POST['pass'];
  }

 ?>
