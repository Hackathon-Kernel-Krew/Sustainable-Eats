<?php
session_start();
require "connection.php";

if(isset($_POST["email"]) & isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(empty($email)){
        echo("Please enter your email");
    }else if(strlen($email) > 50){
        echo("Email address must <50 characters");
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("Invalied email");
    }else if(empty($password)){
        echo("PLease enter new password");
    }else if(strlen($password) < 8 | strlen($password) > 16){
        echo("Password must have 8-16 characters");
    }else {
        $adminResultset = Database::search("SELECT * FROM `admin` WHERE `email`='". $email ."' AND `password`='" . $password . "'");
        $adminRownumber = $adminResultset->num_rows;

        if($adminRownumber > 0){
            $_SESSION["admin_user"] = $adminResultset->fetch_assoc();
            echo("success");
        }else{
            echo("Invlied username or password");
        }
    }
}
?>