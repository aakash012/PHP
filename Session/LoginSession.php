<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login form</title>
  </head>
  <style>
    .container{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
  </style>
  <body>
    <h4>Login Form using Session and cookies with remember me</h4>
    <div class="container">
    <form action="validate.php" method="post">
      <table>
        <tr>
          <td><label for="email">Email</label></td>
          <td><input type="text" name="email" id="email" placeholder="enter your email"><br></td>
        </tr>
        <tr>
          <td><label for="password">Password</label></td>
          <td><input type="pasword" name="password" id="password" placeholder="enter your password"><br></td>
        </tr>
        <tr>
          <td><input type="checkbox"> Remember me <br></td>
        </tr>
        <tr>
          <td><input type="submit" name="login" "value="Login"></td>
        </tr>
      </table>
    </form>
  </div>
  </body>
</html>
