<?php

$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$fathersName = $_POST["ftname"];
$youAreA = $_POST["youre"];
$country = $_POST["country"];
$changeToSee = $_POST["changeToSee"];
$email = $_POST["email"];

$relation = $_POST["gender"] === "Male" ? "son":"daughter";
$prep = $relation === "son" ? "He":"She";

$age = calcage($_POST["bdate"]);
function calcage($birthstr){
    $biryear = (int) substr($birthstr, 0, 4);
    $birmonth = (int) substr($birthstr, 5, 7);
    $birdate = (int) substr($birthstr, 8, 10);

    $date = getdate();
    $curyear = $date["year"];
    $curmonth = $date["mon"];
    $curdate = $date["mday"];

    if ($curmonth === $birmonth){
        $curage = $curdate < $birdate ? $curyear - $biryear -1 : $curyear - $biryear;
        return $curage;
    }
    else {
        $curage = $curmonth < $birmonth ? $curyear - $biryear -1 : $curyear - $biryear;
        return $curage;
    }
}
?>
