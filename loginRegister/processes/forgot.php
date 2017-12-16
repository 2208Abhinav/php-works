<?php
  session_start();

  //for reset password
  $_SESSION["passMail"]= $_POST["email"];
  //for ease of access of variables
  $email = $_POST["email"];
  //DBMS server details
  require "../multiples/dbms.php";

  $selectMail_sql = "SELECT * FROM $tableName WHERE email='$email'";
  $result = $datab->query($selectMail_sql) or die($datab->error);
  //echo var_dump($result);
  //result is an object containing selected rows
  //and
  //debugging a sql query if it fails using die function
  //also die function kills the further execution of script

  //if email address doesn't exist in DB
  if ($result->num_rows == 0) {
    $_SESSION["message"] = "Entered email address doesn't exist";
    header("Location: ../index.php");
  }
  else {
    $user = $result->fetch_assoc();
    $email = $user["email"];
    $token = $user["token"];
    $_SESSION["message"] = "Reset password link sent";
    /*
      //send password reset link (reset.php)
      $to = $email;
      $subject = "Reset password";
      $mssgBody = "Hi! Someone has requested to reset your account's password of your account.\r\n
                   If you didn't make the request, please ignore this email.\r\n
                   Otherwise, reset your account's password by clicking on this "."<a href='typeHereDirectoryTo/reset.php?email={$email}&token={$token}'>link</a>.";
      mail($to, $subject, $mssgBody);
    */
    header("Location: ../index.php");
  }
?>
