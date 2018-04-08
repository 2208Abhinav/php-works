<?php
  session_start();

  //DBMS server details
  require "../multiples/dbms.php";

  //to make sure email and token are set and not empty
  if (isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["token"]) && !empty($_GET["token"]))
  {
    $email = $_GET["email"];
    $token = $_GET["token"];
    //select user with matching email & token, who hasn't verified their email yet
    $correctMatch_sql = "SELECT * FROM $tableName WHERE email='$email' AND token='$token' AND verified>=0";
    $result = $datab->query($correctMatch_sql) or die($datab->error);
    if ($result->num_rows == 0) {
        //when email & token are tampered with, in the URI
        $_SESSION["message"] = "Account verification wasn't successful";
        header("Location: ../index.php");
    } else {
      //when user correctly verifies for the first time or beyond that
      $_SESSION["message"] = "Your account has now been verified";
      //update user's verification value
      $updateVerification_sql = "UPDATE $tableName SET verified=1 WHERE email='$email'";
      $datab->query($updateVerification_sql) or die($datab->error);
      $_SESSION["emailVerified"] = 1;
      header("Location: ../index.php");
    }
  } else {
    //when email & token are tampered with, in the URI
    $_SESSION["message"] = "Account verification wasn't successful";
    header("Location: ../index.php");
  }
?>

