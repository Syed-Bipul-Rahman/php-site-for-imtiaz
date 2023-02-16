<?php

// Connect to the database
$host = 'localhost';
$dbname = 'oursite';
$username = 'root';
$password = '';

$conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the IP address of the visitor
$ip_address = $_SERVER['REMOTE_ADDR'];

// Use the IP-API service to get the visitor's geolocation details
$url = "http://ip-api.com/json/$ip_address";
$details = json_decode(file_get_contents($url));

// Build an array of visitor details to be inserted into the database
$ip_address = mysqli_real_escape_string($conn, $ip_address);
$city = mysqli_real_escape_string($conn, $details->city ?? '');
$region = mysqli_real_escape_string($conn, $details->regionName ?? '');
$country = mysqli_real_escape_string($conn, $details->country ?? '');
$device_type = mysqli_real_escape_string($conn, $_SERVER['HTTP_USER_AGENT'] ?? '');

$sql = "INSERT INTO visitors (ip, city, region, country, device) VALUES ('$ip_address', '$city', '$region', '$country', '$device_type')";
if (!mysqli_query($conn, $sql)) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>