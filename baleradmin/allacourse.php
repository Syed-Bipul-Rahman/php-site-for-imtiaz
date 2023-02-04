<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>All course</h2>

<table>
  <tr>
    <th>Course Number</th>
    <th>Price</th>
    
    <th>Course Name</th>
    <th style="background:yellow; margin: auto; color:  white; padding: 10px;">Action</th>
  </tr>

  <?php


// Path: baleradmin\allpost.php 

include('../apis/connection.php');
$counter=0;
$query="SELECT * FROM `new_course` ORDER BY `new_course`.`course_number` DESC";
$result = $conn->query($query);
   
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
  <tr>
    <td><?php echo ++$counter; ?></td>
    <td>৳ <?php echo $row["price"]; ?></td>
    <td><?php echo $row["title"]; ?></td>
   <td><a style="color: red; text-decoration: none;" href="">Delete</a></td>
  </tr>
  <?php

//echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>
</table>

</body>
</html>


