<?php

if (isset($_POST['ahaha'])) {
    include("../apis/connection.php");

    $topix1 = $_POST['topics'];
    $topix2 = $_POST['topicss'];
    $topix3 = $_POST['topicsss'];
    $topix4 = $_POST['topicssss'];
    $topix5 = $_POST['topicsssss'];
    $topix6 = $_POST['topicssssss'];


    if ($topix1 == "" || $topix2 == "" || $topix3 == "" || $topix4 == "" || $topix5 == "" || $topix6 == "") {
        $_SESSION['error'] = 'Data is empty';
       
    } else {
        
        $sql = "INSERT INTO `webneartopics` (`serial`, `webnear_id`, `topics_o`, `topics_on`, `topics_one`, `topics_two`, `topics_tw`, `topics_t`) VALUES (NULL, '2', '$topix1', '$topix2', '$topix3', '$topix4', '$topix5', '$topix6');";
        $result = $conn->query($sql);

        if ($result == 1) {
            header("location: ../index.php");
        } else {
            $_SESSION['error'] = 'failed to post data';
        }
    }
}

?>
<!DOCTYPE html>
<html>

<body>

    <center><h2>Add Topics</h2>

<form method="post" action="">
    <label for="">Topics name:</label><br>
    <input type="text" id="fname" name="topics"><br>
    <label for="">Topics name</label><br>
    <input type="text" id="lname" name="topicss"><br><br>
    <label for="">Topics name:</label><br>
    <input type="text" id="fname" name="topicsss"><br>
    <label for="">Topics name</label><br>
    <input type="text" id="lname" name="topicssss"><br><br>
    <label for="">Topics name:</label><br>
    <input type="text" id="fname" name="topicsssss"><br>
    <label for="">Topics name</label><br>
    <input type="text" id="lname" name="topicssssss"><br><br>
    <input type="submit" value="Submit" name="ahaha">
</form>
<p>Enter 6 Topics</p>
</center>
    
    <p style="color: red; font-weight: bold;">
        <?php if (isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
        } ?></p>

</body>

</html>