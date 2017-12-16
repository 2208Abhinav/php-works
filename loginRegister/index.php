<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LoginRegister</title>

  <link rel="stylesheet" type="text/css" href="assets/css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body style="background-color: #39CCCC">
  <div class="container">
    <div class="logRegTab">
      <a href="" class="regOption">Register</a>
      <a href="" class="logOption">Log In</a>
    </div>
    <?php if(isset($_SESSION["message"])): ?>
      <div class="index-mssg-body">
        <p class="index-mssg">
          <?php
            echo $_SESSION["message"];
            //error message to be shown only once
            unset($_SESSION["message"]);
          ?>
        </p>
      </div>
    <?php endif; ?>
    <div class="logRegContent">
      <div class="loginContent">
        <p>Log in for testing</p>
        <form action="processes/login.php" method="post" autocomplete="off">
          <input class="input" type="text" name="email" placeholder="Email">
          <br>
          <input class="input" type="password" name="pwd" placeholder="Password">
          <br><br>
          <a href="views/forgotPass.php" class="forgotPass">Forgot Password?</a>
          <br>
          <!--submits the form data to server-->
          <button type="submit" class="btn">Log In</button>
        </form>
      </div>

      <div class="registerContent">
        <p>Sign up for testing</p>
        <form action="processes/register.php" method="post" autocomplete="off">
          <input class="input" type="text" name="username" placeholder="Username">
          <br>
          <input class="input" type="password" name="pwd" placeholder="Password">
          <br>
          <input class="input" type="text" name="email" placeholder="Email Address">
          <br>
          <!--submits the form data to server-->
          <button type="submit" class="btn">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
