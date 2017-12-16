<?php
  session_start();

  //set session variables to be used on profile.php page
  $_SESSION["username"]= $_POST["username"];
  $_SESSION["email"]= $_POST["email"];
  //for ease of access of variables
  $username = $_SESSION["username"];
  $hashed_pwd = password_hash($_POST["pwd"], PASSWORD_DEFAULT);
  $email = $_SESSION["email"];
  //generating random token
  function getToken($length){
    $token = "";
    $resource = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $resource.= "abcdefghijklmnopqrstuvwxyz";
    $resource.= "0123456789";
    $resource.= "!@%+&-()/";
    for ($i=0; $i<$length; $i++) {
        $token.= $resource[random_int(0, strlen($resource)-1)];
    }
    return $token;
  }
  $token = getToken(40);

  //DBMS server details
  require "../multiples/dbms.php";

  $selectMail_sql = "SELECT * FROM $tableName WHERE email= '$email'";
  $result = $datab->query($selectMail_sql) or die($datab->error);
  //echo var_dump($result);
  //result is an object containing selected rows
  //and
  //debugging a sql query if it fails using die function
  //also die function kills the further execution of script

  //if email address already exists in DB
  if ($result->num_rows > 0) {
    $_SESSION["message"] = 'This email address is already registered with us | Please try again';
    header("Location: ../index.php");
  }
  else{
    $insertNew_sql = "INSERT INTO $tableName (email, username, password, token) VALUES ('$email', '$username', '$hashed_pwd', '$token')";
    $insertDB = $datab->query($insertNew_sql) or die($datab->error);
    //echo var_dump($insertDB);
    //insertDB is a bool

    //to make sure that the user has registered properly
    if ($insertDB) {
      //to remember that the user is now logged in to profile page after registering
      $_SESSION["loggedIn"] = 1;
      //an only once to be shown mssg after getting registered and logged in to profile page
      $_SESSION["message"] = "Account verification link has been sent to {$email}";
      //initial value is 0; user has not verified his/her email with verify.php
      $_SESSION["emailVerified"] = 0;
      /*
      //send account/email verification link (verify.php)
      $to = $email;
      $subject = "Email verification";
      $mssgBody = "Hi! Thank you for signing up as {$username} at loginRegister.\r\n
                   Complete your registration by clicking on this "."<a href='typeHereDirectoryTo/verify.php?email={$email}&token={$token}'>link</a>"." and verify your account.";
      echo mail($to, $subject, $mssgBody);
      */
      header("Location: ../views/profile.php");
    }
    else
    {
      //if insert query fails
      $_SESSION["message"] = 'Registration failed | Please try again';
      header("Location: ../index.php");
    }
  }
?>



