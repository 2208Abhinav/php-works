<?php
  session_start();
  session_unset();
  session_destroy();
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
<body style="background-color: #01FF70">
  <div class="container">
    <div class="logout-body">
      <p>You've been successfully logged out!</p>
      <p style="font-size: 20px;">Head back to</p>
      <button type="button" class="btn" id="for-home-btn">Home</button>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
