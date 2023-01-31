<?php
include './connection.php';


$email = $_POST['uname'];
$password = md5($_POST['pass']);

$userhasornot = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

$result = $conn->query($userhasornot);

if ($result == 1) {
    header("location: ../users");
} else {
    header("location: ../login.php");
}