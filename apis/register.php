<?php
session_start();

include './connection.php';

//email,password,phone,division,district,upazila,area,fullname,bloodgroup,lasstdonationdate

$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$password_confirm = $_POST['password_confirm'];

//isUserExist?
$checkquery = "SELECT * FROM `users` WHERE `email`=$email";
$result = $conn->query($checkquery);
if ($result->num_rows > 0) {
    $_SESSION['userexist'] = "User already exist";
   exit(header("location: ../register.php"));
} else {


    //if password doesnot match then it will give  a warning

    if ($pass != $password_confirm) {
        $_SESSION['passnotmatch'] = "Password does not match";
        header("location: ../register.php");
    } else {
        if (strlen($pass) < 6) {
            $_SESSION['passnotmatch'] = "Password must be at least 6 characters";
            header("location: ../register.php");
        } else {
            $haspass = md5($pass);

            $query = "INSERT INTO `users` (`uid`, `name`, `email`, `password`, `registered_on`) VALUES (NULL, '$name', '$email', '$haspass', current_timestamp());";

            $result = $conn->query($query);

            if ($result == 1) {
            $_SESSION['uid'] = $email;
                header("location: ../users");
            }
        }
    }
}
