<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LoginRegister</title>

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body style="background-color: #39CCCC">
  <div class="container">
    <div class="logRegTab">
      <a href="" class="regOption">Register</a>
      <a href="" class="logOption">Log In</a>
    </div>

    <div class="logRegContent">
      <div class="loginContent">
        <p>Log in for testing</p>
        <form action="login.php" method="post" autocomplete="off">
          <input class="input" type="text" name="email" placeholder="Email">
          <br>
          <input class="input" type="password" name="pwd" placeholder="Password">
          <p class="forgotPass"><a href="forgot.php">Forgot Password?</a></p>
          <!--Submits the form data to server-->
          <button type="submit" class="btn">Log In</button>
        </form>
      </div>

      <div class="registerContent">
        <p>Sign up for testing</p>
        <form action="register.php" method="post" autocomplete="off">
          <input class="input" type="text" name="username" placeholder="Username">
          <br>
          <input class="input" type="password" name="pwd" placeholder="Password">
          <br>
          <input class="input" type="text" name="email" placeholder="Email Address">
          <br>
          <!--Submits the form data to server-->
          <button type="submit" class="btn">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
