<?php
session_start();
if (isset($_SESSION['uid'])) {
    echo $_SESSION['uid'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forbidden</title>
</head>
<body>
    <h1>Access Denied!</h1>
</body>
</html>