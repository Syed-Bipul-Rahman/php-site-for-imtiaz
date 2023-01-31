<?php
include './apis/connection.php';
   
   $sql = 'SELECT * FROM `total_course`';
 
   $result = $conn->query($sql);
   
   if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
     }
   } else {
     echo "0 results";
   }
   $conn->close();
   ?>