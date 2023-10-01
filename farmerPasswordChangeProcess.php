<?php
require "connection.php";

if(isset($_POST["code"]) & isset($_POST["password1"]) & isset($_POST["password2"]) & isset($_POST["nic"])){
    $code = $_POST["code"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];
    $nic = $_POST["nic"];

    if(empty($code)){
        echo("PLease enter verification code");
    }else if(strlen($code) != 6){
        echo(strlen($code));
        echo("Verification code must have 6 characters");
    }else if(empty($password1)){
        echo("PLease enter new password");
    }else if(strlen($password1) < 8 | strlen($password1) > 16){
        echo("Password must have 8-16 characters");
    }else if(empty($password2)){
        echo("Please enter confirm password");
    }else if($password1 != $password2){
        echo("Passwords not matching");
    }else{
        $verificationResultset = Database::search("SELECT * FROM `farmer` WHERE `verification_code`='". $code ."' AND `nic`='". $nic ."'");
        $verificationRownumber = $verificationResultset->num_rows;

        if($verificationRownumber > 0){
            Database::iud("UPDATE `farmer` SET `password`='". $password1 ."' WHERE `nic`='". $nic ."'");
            Database::iud("UPDATE `farmer` SET `verification_code`='' WHERE `nic`='". $nic ."'");
            echo("success");
        }else{
            echo("Invlied verification code");
        }
    }

}else{
    echo("Something went wrong");
}
?>