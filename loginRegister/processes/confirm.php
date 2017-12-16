<?php
  session_start();

  if (!isset($_POST["newPass"]) && empty($_POST["newPass"]) && isset($_POST["confirmPass"]) && empty($_POST["confirmPass"])) {
    header("Location: ../index.php");
  }
  $passMail = $_SESSION["passMail"];
  //DBMS server details
  require "../multiples/dbms.php";

  if($_POST["newPass"]==$_POST["confirmPass"]) {
    $newHashed_pwd = password_hash($_POST["newPass"], PASSWORD_DEFAULT);
    $updatePass_sql = "UPDATE $tableName SET password='$newHashed_pwd' WHERE email='$passMail'";
    $result = $datab->query($updatePass_sql) or die($datab->error);
    //echo var_dump($result);
    //result is an object containing selected rows
    //and
    //debugging a sql query if it fails using die function
    //also die function kills the further execution of script

    $_SESSION["message"] = "Password reset was successful";
    header("Location: ../index.php");
  }else {
    $_SESSION["message"] = "Entered passwords didn't match | Please try again";
    header("Location: ../views/resetPass.php");
  }
?>

