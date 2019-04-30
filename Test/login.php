<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <form action="check.php" method="POST">
        <h2>Login</h2>
        <label for="uname">Username</label><br>
        <input type="text" name="username" placeholder="enter yout username"><br>
        <label for="pass">Password</label><br>
        <input type="password" name="password" placeholder="enter your password"><br>
        <input type="checkbox" name="checkbox">Remember me <br>
        <input type="submit" name="login" value="Login">
      </form>
    </div>
  </body>
  </html>
