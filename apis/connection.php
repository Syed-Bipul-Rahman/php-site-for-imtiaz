<?php



$server = "localhost";
$user = "root";
$password = "";
$db = "oursite";


$conn = new mysqli($server, $user, $password, $db);

if($conn->connect_error){
    die("connection failed!" . $conn->connect_error);

}