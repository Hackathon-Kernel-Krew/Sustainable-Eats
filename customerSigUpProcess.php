<?php

require "./connection.php";

$mobile = $_POST["mobile"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$re_password = $_POST["re_password"];

// echo $mobile;
// echo "</br>";
// echo $fname;
// echo "</br>";
// echo $lname;
// echo "</br>";
// echo $email;
// echo "</br>";
// echo $password;
// echo "</br>";
// echo $re_password;
// echo "</br>";

if (empty($mobile)) {
    echo ("Please Enter Your mobile number");
} else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo ("Invalid Mobile Number!");
}else if (empty($fname)) {
    echo ("Please Enter Your Firs Name");
} else if (strlen($fname) > 45) {
    echo ("First Name must have LESS THAN 50 characters!");
} else if (empty($lname)) {
    echo ("Please Enter Your lname Name");
} else if (strlen($lname) > 45) {
    echo ("Last Name must have LESS THAN 50 characters!");
} else if (empty($email)) {
    echo ("Please enter your Email address!");
} else if (strlen($email) > 100) {
    echo ("Email must have LESS THAN 100 characters!");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email address!");
} else if (empty($password)) {
    echo ("Please enter your Password!");
} else if (strlen($password) < 5 || strlen($password) > 20) {
    echo ("Password length must be between 5 and 20!");
} else if (empty($re_password)) {
    echo ("re Please enter your Password!");
} else if (strlen($re_password) < 5 || strlen($re_password) > 20) {
    echo ("re Password length must be between 5 and 20!");
} else if ($password != $re_password) {
    echo ("Passwords not matching");
} else {

    $rs = Database::search("SELECT * FROM `customer` WHERE `mobile`='" . $mobile . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo "User with the same Email or Mobile already exists.";
    } else {

        Database::iud("INSERT INTO `customer` (`mobile`,`first_name`,`last_name`,`email`,`password`) VALUES ('" . $mobile . "','" . $fname . "','" . $lname . "','" . $email . "','" . $password . "')");

        echo ("success");
    }
}
