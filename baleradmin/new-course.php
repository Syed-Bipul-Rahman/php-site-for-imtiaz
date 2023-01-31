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






        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type=""
            placeholder="image" name="img" id="">


        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="price" name="price" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="title" name="title" id="">

        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="ratings" name="ratings" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="duration" name="duration" id="">

        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="total_sold" name="total_sold" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="describtio" name="describtio" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="lesson" name="lesson" id="">
        <select class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" name="cat_gory"
            id="">
            <option value="0">Select course catagory</option>
            <option value="1">java</option>
            <option value="2">android</option>
            <option value="3">web-apps</option>
        </select>
       
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="date"
            placeholder="lastupdate" name="lastupdate" id="">



        <div class="flex justify-start items-center"><button name="addcourse"
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">Submit</button></div>


    </form>

</body>

</html>
<?php

require '../apis/connection.php';

if(isset($_POST['addcourse'])){


  $img= $_POST['img'];
   $price= $_POST['price'];
   $title= $_POST['title'];
  $ratings= $_POST['ratings'];
   $duration= $_POST['duration'];
   $total_sold= $_POST['total_sold'];
   $describtio= $_POST['describtio'];
   $lesson= $_POST['lesson'];
  $cat_gory= $_POST['cat_gory'];
   $title= $_POST['title'];
   $lastupdate= $_POST['lastupdate'];


if ($img==""||$price==""||$title==""||$ratings==0||$duration==""||$total_sold==""||$describtio==""||$lesson==""||$cat_gory==0||$title=="") {
  echo '
  <div  style="color: red";>
  <p>Empty value Boss🙄</p>
  </div>';
} else {


    $query = "INSERT INTO `new_course` (`course_number`, `img`, `price`, `title`, `ratings`, `duration`, `total_sold`, `describtio`, `lesson`, `cat_gory`, `lastupdate`, `creation_date`) VALUES (NULL, '$img', '$price', '$title', '$ratings', '$duration', '$total_sold', '$describtio', '$lesson', '$cat_gory', '$lastupdate', current_timestamp());";

        $result = $conn->query($query);
    
        if ($result == 1) {
            header("location: ./controller.php");
        }
    
}


}




?>