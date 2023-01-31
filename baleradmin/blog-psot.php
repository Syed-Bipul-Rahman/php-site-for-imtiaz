<?php


include '../apis/connection.php';

$im = $_POST['imgurlman'];
//$im=$im . time().".jpg";
$tm = $_POST['titlekihobe'];
$dm = $_POST['detalisbolovai'];

$sql = "INSERT INTO `psblogvai` (`posotid`, `kpostkorche`, `titletaki`, `bistarito`, `imgurlki`) VALUES (NULL, '2', '$tm', '$dm', '$im')";

$result = $conn->query($sql);

if ($result==1) {
    header("location: ./succeess.html");
}