<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LoginRegister</title>

  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
  <div class="container">
    <div class="logRegTab">
      <a href="" class="regOption">Register</a>
      <a href="" class="logOption">Log In</a>
    </div>

    <div class="logRegContent">
      <div class="loginContent">
        <p>Log in for testing</p>
        <form action="login.php" method="post" autocomplete="off">
          <input class="input" type="text" name="email" placeholder="Email" required>
          <br>
          <input class="input" type="text" name="pwd" placeholder="Password" required>
          <p class="forgotPass"><a href="forgot.php">Forgot Password?</a></p>
          <button type="submit" class="input-btn">Log In</button>
        </form>
      </div>

      <div class="registerContent">
        <p>Sign up for testing</p>
        <form action="register.php" method="post" autocomplete="off">
          <input class="input" type="text" name="username" placeholder="Username" required>
          <br>
          <input class="input" type="text" name="pwd" placeholder="Password" required>
          <br>
          <input class="input" type="text" name="email" placeholder="Email Address" required>
          <br>
          <button type="submit" class="input-btn">Register</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
