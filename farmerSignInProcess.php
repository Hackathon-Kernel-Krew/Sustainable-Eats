<?php

require "connection.php";

session_start();


$nic = $_POST["n"];
$password = $_POST["p"];

if(empty($nic)){
    echo ("Please Enter Your NIC Number!");
}else if(strlen($nic) < 9 || strlen($nic) > 12){
    echo ("Invalid NIC Number");
}else if(empty($password)){
    echo ("Please Enter Your Password");
}else if(strlen($password) < 8 || strlen($password) > 16){
    echo ("Invalid Password");
}else{

    $rs = Database::search("SELECT * FROM `farmer` WHERE `nic`= '".$nic."' AND `password`= '".$password."' ");
    $n = $rs->num_rows;

    if($n == 1){

       
        $d = $rs->fetch_assoc();
        $_SESSION["farmer"] = $d;

        echo ("success");


    }else{

        echo ("Invalid Username or Password");

    }

     
}

?>