<?php
include "connection.php";


$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['conf_password'];


if (empty($f_name)) {
    echo ("First Name is required");
} else if (empty($l_name)) {
    echo ("Last Name is required");
} else if (empty($email)) {
    echo ("Email is required");
} else if (empty($password)) {
    echo ("Password is required");
}else if(empty($c_password)){
    echo("Confirem password is required");
}else if (strlen($f_name) > 20 || strlen($f_name) < 2) {
    echo ("First Name must be between 2 and 20 characters.");
} else if (strlen($l_name) > 20 || strlen($l_name) < 2) {
    echo ("Last Name must be between 2 and 20 characters.");
} else if (strlen($email) > 100) {
    echo ("Email must be less than 100 characters.");
}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo ("Invalid Email");
} else if (strlen($password) < 6 || strlen($password) > 12) {
    echo ("Password must be between 6 and 12 characters");
} else {
    $resultset = Database::select("SELECT * FROM `user` WHERE email = '$email'");
    $number = $resultset->num_rows;

    if ($number > 0) {
        echo ("Email already exists");
    } else {
        $d = new DateTime();
        $timezone = new DateTimeZone('Asia/Colombo');
        $d->setTimezone($timezone);
        $date = $d->format('Y-m-d H:i:s');

        Database::cud("INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `joined_date`) VALUES ('" . $f_name . "', '" . $l_name . "', '" . $email . "', '" . $password . "', '" . $date . "')");

        echo ("Registration Successful !");
    }
}
