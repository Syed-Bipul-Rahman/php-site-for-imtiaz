<?php
session_start();
if (isset($_SESSION['uid'])) {
    header('location: ./checkout.php');
} else {
    header('location: ./login.php');
}
