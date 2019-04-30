<form action="extract.php" method="post" align="left">
  Name: <br><input type="text" name="name"><br>
  E-mail:<br><input type="text" name="email"><br>
  Phone Number:<br><input type="text" name="phno"><br>
  Password:<br><input type="password" name="pass"><br>
  Comment: <br><textarea name="comment" rows="5" cols="40"></textarea><br>
  URL: <br><input type="text" name="url"><br>
  Gender:<br>
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><input type="submit" name="submit">
</form>
<?php
if(isset($_POST['submit']))
{
    extract($_POST);
    echo $name;
    echo $email;
    echo $phno;
}
?>