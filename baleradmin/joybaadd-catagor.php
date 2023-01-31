<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Catagory</title>
</head>
<body>
    <form action="" method="post">
    <input name="cata" type="text">
    <select name="cata_types" id="">
        <option value="0">Free</option>
        <option value="1">Paid</option>
    </select>
    <input name="add_cat" type="submit" value="Add Catagory">
    </form>
</body>
</html>
<?php
include '../apis/connection.php';
if (isset($_POST['add_cat'])) {
    
$names = mysqli_real_escape_string($conn,$_POST['cata']);
$tpy = $_POST['cata_types'];

if ($names=="") {
    echo '<h1 style="color: red; ">Field is empty!</h1>';
} else {
    
$sql = "INSERT INTO `catagory` (`catagory_no`, `catagory_name`, `created_by`, `course_free`, `created_on`) VALUES (NULL, '$names', '$tpy', '0', current_timestamp());";

$result = $conn->query($sql);
    
if ($result == 1) {

    echo '<h1 style="color: green; ">Catagory Added!</h1>';
}
}

}

?>