<?php
  session_start();

  //if user didn't request to reset password
  if (!isset($_SESSION["reset"]) || $_SESSION["reset"]!=true) {
    header("Location: index.php");
  }
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
    <div class="confirm-body">
      <p>Type new password</p>
      <?php if(isset($_SESSION["message"])): ?>
        <div class="reset-mssg-body">
          <p class="reset-mssg">
            <?php
              echo $_SESSION["message"];
              //error message to be shown only once
              unset($_SESSION["message"]);
            ?>
          </p>
        </div>
      <?php endif; ?>
      <form action="../processes/confirm.php" method="post" autocomplete="off">
        <input class="input" type="text" name="newpass" placeholder="Password">
        <input class="input" type="text" name="confirmpass" placeholder="Confirm password">
        <button type="submit" class="btn">Reset Password</button>
      </form>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
