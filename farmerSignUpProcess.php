<?php

require "connection.php";


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password1 = $_POST["p1"];
$password2 = $_POST["p2"];
$mobile = $_POST["mobile"];
$nic = $_POST["nic"];


if (empty($nic)) {
    echo ("Please Enter Your NIC Number");
} else if (strlen($nic) < 9 || strlen($nic) > 12) {
    echo ("Invalid NIC Number");
} else if (empty($mobile)) {
    echo ("Please Enter Your Mobile Number!");
} else if (strlen($mobile) != 10) {
    echo ("Mobile Number Must Contain 10 Characters");
} else if (!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/", $mobile)) {
    echo ("Invalid Mobile Number!");
} else if (empty($fname)) {
    echo ("Please Enter Your First Name!");
} else if (strlen($fname) > 50) {
    echo ("First Name Must Have LESS THAN 50 characters!");
} else if (empty($lname)) {
    echo ("Please Enter Your Last Name!");
} else if (strlen($lname) > 50) {
    echo ("Last Name Must Have LESS THAN 50 characters!");
} else if (empty($email)) {
    echo ("Please Enter Your Email !!!");
} else if (strlen($email) >= 100) {
    echo ("Email Must Have Less Than 100 Characters");
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email !!!");
} else if (empty($password1)) {
    echo ("Please Enter Your Password !!!");
} else if (strlen($password1) < 8 || strlen($password1) > 16) {
    echo ("Password Must Be Between 8 - 16 Characters");
} else if (empty($password2)) {
    echo ("Please Verify Your Password !!!");
} else if (strlen($password2) < 5 || strlen($password2) > 20) {
    echo ("Password Verification Must Be Between 8 - 16 Characters");
} else if ($password1 != $password2) {
    echo ("Password Verfication Failed");
} else {
    $rs = Database::search("SELECT * FROM `farmer` WHERE `nic`='" . $nic . "' AND 
`mobile`='" . $mobile . "'");
    $n = $rs->num_rows;

    if ($n > 0) {
        echo ("User with the same NIC or Mobile already exists.");
    }else{

    $d = new DateTime();
    $date = $d->format("Y-m-d");
    
    Database::iud("INSERT INTO `farmer` 
(`nic`,`first_name`,`last_name`,`email`,`password`,`mobile`,`joined_date`)
VALUES ('" . $nic . "','" . $fname . "','" . $lname . "','" . $email . "','" . $password2 . "','" . $mobile . "',
'" . $date . "')");

echo ("Success");

}
}



?>
