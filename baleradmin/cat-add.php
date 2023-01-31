<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add post| @usrname</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form style="box-shadow: 0px 0px 16px 0px #d1d0d0;" class=" gap-4 w-full p-1 xs:p-2 sm:p-6 md:p-16 rounded-xl"
        action="" method="post">


        <select class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" name="catagory" id="">
        <option value="0">Select course catagory</option>
            <option value="1">java</option>
            <option value="2">android</option>
            <option value="3">web-apps</option>
        </select>



        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type=""
            placeholder="title of course" name="title" id="">


        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="page link" name="linku" id="">



        <div class="flex justify-start items-center"><button name="addcourse"
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">Submit</button></div>


    </form>
</body>

</html>
<?php

require '../apis/connection.php';

if(isset($_POST['addcourse'])){


  $cat= $_POST['catagory'];
   $title= $_POST['title'];
   $link= $_POST['linku'];


if ($cat==0||$title==""||$link=="") {
  echo '
  <div class="uppercase py-3 px-8 bg-orange-600 text-white my-20 font-bold rounded-md">
  <p>Empty value Boss🙄</p>
  </div>';
} else {
    $query = "INSERT INTO `total_course` (`nofcourse`, `course_catagory`, `addeb_by`, `course_title`, `page_link`, `time`) VALUES (NULL, '$cat', '5', '$title', '$link', current_timestamp());";

        $result = $conn->query($query);
    
        if ($result == 1) {
            header("location: ../users");
        }
    
}





}




?>