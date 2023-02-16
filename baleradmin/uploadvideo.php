<form action="" method="post" enctype="multipart/form-data">
  <label for="topic">Select a topic:</label>
  <select id="topic" name="topic">
    <option value="1">Java</option>
    <option value="2">Graphics</option>
    <option value="3">Photoshop</option>
  </select><br><br>

  <label for="video">Upload a video:</label>
  <input type="file" id="video" name="video"><br><br>

  <label for="title">Enter the video title:</label>
  <input type="text" id="title" name="title"><br><br>

  <label for="unique_name">Enter a unique video name:</label>
  <input type="text" id="unique_name" name="unique_name"><br><br>

  <label for="progress">Upload progress:</label>
  <progress id="progress" value="0" max="100"></progress><br><br>

  <input type="submit" name="upload" value="Submit">
</form>

<?php
if (isset($_POST['upload'])) {
   // Retrieve the form data
$course_number = $_POST['course_number'];
$topics = $_POST['topics'];
$video_link = $_POST['video_link'];
$title = $_POST['title'];

// Connect to the database (replace the values with your own)
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database';

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check for connection errors
if ($mysqli->connect_error) {
  die('Connection failed: ' . $mysqli->connect_error);
}

// Verify that the uploaded file is a video
$allowed_types = array('mp4', 'avi', 'wmv', 'mov');
$video_type = pathinfo($_FILES['video_link']['name'], PATHINFO_EXTENSION);

if (!in_array($video_type, $allowed_types)) {
  die('Error: the uploaded file is not a video.');
}

// Upload the video and track progress
$unique_name = uniqid() . '.' . $video_type;
move_uploaded_file($_FILES['video_link']['tmp_name'], "uploads/$unique_name");
$progress = 100;

// Sanitize the data
$course_number = mysqli_real_escape_string($mysqli, $course_number);
$topics = mysqli_real_escape_string($mysqli, $topics);
$video_link = mysqli_real_escape_string($mysqli, "uploads/$unique_name");
$title = mysqli_real_escape_string($mysqli, $title);

// Prepare and execute the SQL statement to insert the data
$sql = "INSERT INTO videos (course_number, topics_no, video_link, title) VALUES ('$course_number', '$topics', '$video_link', '$title')";

if ($mysqli->query($sql) === false) {
  die('Error executing statement: ' . $mysqli->error);
}

// Close the database connection
$mysqli->close();

// Sanitize the title


  }
?>
