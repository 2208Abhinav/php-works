<?php
  session_start();

  //for ease of access of variables
  $email = $_POST["email"];
  $entered_pwd = $_POST["pwd"];
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
    $_SESSION["message"] = "Entered email address doesn't exist | Please register first";
    header("Location: ../index.php");
  }
  else {
    $user = $result->fetch_assoc();
    if (password_verify($entered_pwd, $user["password"])) {
        //if password matches, fetch user's details from DB
        $_SESSION["email"] = $user["email"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["loggedIn"] = 1;
        $_SESSION["emailVerified"] = $user["verified"];
        header("Location: ../views/profile.php");
    }
    else {
        $_SESSION["message"] = "You entered the wrong password | Please try again";
        header("Location: ../index.php");
    }
  }
?>


