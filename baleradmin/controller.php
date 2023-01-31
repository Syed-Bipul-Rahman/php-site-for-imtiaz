<?php
include '../apis/connection.php';


$sql = "SELECT `course_number` FROM `new_course`ORDER BY `course_number` DESC LIMIT 1";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        header("location: joybngadd-course-topics.php?courseidvao=".base64_encode(urlencode($row['course_number'])));


    }
}?>

