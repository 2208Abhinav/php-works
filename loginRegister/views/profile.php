<?php
  session_start();

  //if user didn't properly registered or logged in
  if ($_SESSION["loggedIn"]!=1) {
    $_SESSION["message"] = "You must register yourself or login before viewing your profile page";
    header("Location: index.php");
  }
  else{
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
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
<body style="background-color: #01FF70">
  <div class="container">
    <div class="profile-body">
      <p>Welcome</p>
      <?php if(isset($_SESSION["message"])): ?>
        <p class="profile-mssg1">
          <?php
            echo $_SESSION["message"];
            //confirmation link message to be shown only once after registration
            unset($_SESSION["message"]);
          ?>
        </p>
      <?php endif; ?>
      <?php if($_SESSION["emailVerified"] == 0): ?>
        <p class="profile-mssg2">Account is not verified | Please check your email with which you registered</p>
      <?php endif; ?>
      <p class="user-details1">You're logged in as:</p>
      <p class="user-details2"><?php echo $username; ?><br><?php echo $email; ?></p>
      <button type="button" class="btn" id="for-logout-btn">Log Out</button>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>

