<?php
  session_start();

  //DBMS server details
  require "../multiples/dbms.php";

  //to make sure email and token are set and not empty
  if (isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["token"]) && !empty($_GET["token"]))
  {
    $email = $_GET["email"];
    $token = $_GET["token"];
    //select user with matching email & token, who wants to reset password
    $correctMatch_sql = "SELECT * FROM $tableName WHERE email='$email' AND token='$token'";
    $result = $datab->query($correctMatch_sql) or die($datab->error);
    if ($result->num_rows == 0){
        //when email & token are tampered with, in the URI
        $_SESSION["message"] = "Password reset wasn't successful";
        header("Location: ../index.php");
    } else {
      //when user exists in DB; redirecting to type new password-page
      $_SESSION["reset"]=true;
      header("Location: ../views/resetPass.php");
    }
  } else {
    //when email & token are tampered with, in the URI
    $_SESSION["message"] = "Password reset wasn't successful";
    header("Location: ../index.php");
  }
?>
