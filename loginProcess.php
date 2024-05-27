<?php 
session_start();
include "connection.php";

$email = $_POST["email"];
$password = $_POST["password"];
$rememberme =$_POST["rememberme"];

if(empty($email)){
    echo("Email is required");
}else if(empty($password)){
    echo("Password is required");
}else{
    $resultset = Database::select("SELECT * FROM `user` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    $number = $resultset->num_rows;
    if($number == 1){
        echo("Login Successful !");
        $data = $resultset->fetch_assoc();
        $_SESSION["user"] = $data;
        
        if($rememberme == "true"){
            setcookie("email",$email,time()+(60*60*24*30));
            setcookie("password",$password,time()+(60*60*24*30));
        }else{
            setcookie("email","",-1);
            setcookie("password","",-1);
        }
    }else{
        echo("Invalid Email or Password");
    }
}