<?php


include './connection.php';

//email,password,phone,division,district,upazila,area,fullname,bloodgroup,lasstdonationdate




$name = $_POST['name'];
$email = $_POST['email'];


$pass = $_POST['pass'];
$password_confirm = $_POST['password_confirm'];

//isUserExist?
$checkquery = "SELECT * FROM `users` WHERE `email`='$email'";

$raw = mysqli_query($conn, $checkquery);
$count = mysqli_num_rows($raw);
if ($count > 0) {
    header("location: ../register.php");
} else {


    //if password doesnot match then it will give  a warning

    if ($pass != $password_confirm) {
        header("location: ../register.php");
    } else {
        if (strlen($pass) < 6) {
            header("location: ../register.php");
        } else {
            $haspass = md5($pass);

            $query = "INSERT INTO `users` (`uid`, `name`, `email`, `password`, `registered_on`) VALUES (NULL, '$name', '$email', '$haspass', current_timestamp());";

            $result = $conn->query($query);

            if ($result == 1) {
                header("location: ../users");
            }
        }
    }
}
