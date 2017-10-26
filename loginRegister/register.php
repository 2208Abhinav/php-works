<?php
  session_start();

  $_SESSION["username"]= $_POST["username"];
  $_SESSION["pwd"]= $_POST["pwd"];
  $_SESSION["email"]= $_POST["email"];

  $username = $_SESSION["username"];
  $pwd = $_SESSION["pwd"];
  $email = $_SESSION["email"];

  $datab = new mysqli("serverIP", "serverUsername", "serverPassword", "nameDB");

  if ($datab->connect_errno) {
    die("Sorry, we are not able to connect to the server or database at the moment. Please go back and try some time later.");
  }

  $selectMail_sql = "SELECT * FROM users WHERE email='$email'";
  $result = $datab->query($selectMail_sql) or die($datab->error);

  if ($result->num_rows > 0) {
    header("Location: error.php");
  }
  else{
    $insertNew_sql = "INSERT INTO users (username, password, email) VALUES ('$username','$pwd','$email')";
    $insertDB = $datab->query($insertNew_sql) or die($datab->error);
    if ($insertDB) {
      header("Location: profile.php");
    }
    else{
      header("Location: error.php");
    }
  }
?>



