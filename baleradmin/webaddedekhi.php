<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add webnear| @usrname</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form style="box-shadow: 0px 0px 16px 0px #d1d0d0;" class=" gap-4 w-full p-1 xs:p-2 sm:p-6 md:p-16 rounded-xl"
        action="" method="post">




        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type=""
            name="imgurl" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type=""
            placeholder="title " name="title" id="">
        Date:
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="date"
            name="date" id="">
        time:
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="time"
            name="time" id="">

        <textarea class="my-2 border border-slate-400 w-full rounded-md px-4 text-lg font-medium" name="descrip" id=""
            rows="5">Welcome to Joybangla</textarea>




        <div class="flex justify-start items-center"><button name="addcourse"
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">Submit</button></div>


    </form>
</body>

</html>
<?php

require '../apis/connection.php';

if(isset($_POST['addcourse'])){

 
  $img= $_POST['imgurl'];
   $title= $_POST['title'];
   $date= $_POST['date'];
   $time= $_POST['time'];
   $descrip= $_POST['descrip'];
if ($img==""||$title==""||$descrip=="") {
  echo '
  <div class="uppercase py-3 px-8 bg-orange-600 text-white font-bold rounded-md">
  <p>Empty value Boss🙄</p>
  </div>';
} else {
    $query = "INSERT INTO `webnear` (`wegnearid`, `web_img`, `web_title`, `date`, `time`, `description`) VALUES (NULL, '$img', '$title', '$date', '$time', '$descrip');";

        $result = $conn->query($query);
    
        if ($result == 1) {
            echo '
            <div class="uppercase py-3 px-8 bg-orange-600 text-white p-20  font-bold rounded-md">
            <p>Weldone! Boss😍🥰</p>
            </div>';
        }
    
}





}




?>