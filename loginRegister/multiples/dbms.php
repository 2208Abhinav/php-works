<?php
  //DBMS server details
  //fill the details in the respective blanks
  $DBMSip = //blank
  $DBMSusername = //blank
  $DBMSpassword = //blank
  $DBname = //blank
  $tableName = //blank
  $datab = new mysqli($DBMSip, $DBMSusername, $DBMSpassword, $DBname);
  //echo var_dump($datab);
  //datab is an object serving as a connection to specified DBMS
  if ($datab->connect_errno) {
    die("Sorry, we are not able to connect to the server or database at the moment. Please go back and try again some time later.");
  }
?>
