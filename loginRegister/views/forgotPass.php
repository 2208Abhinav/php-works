<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LoginRegister</title>

  <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body style="background-color: #FF4136">
  <div class="container">
    <div class="forgot-body">
      <p>Reset Password</p>
      <form action="../processes/forgot.php" method="post" autocomplete="off">
        <input class="input" type="text" name="email" placeholder="Email Address">
        <button type="submit" class="btn">Send reset link</button>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
