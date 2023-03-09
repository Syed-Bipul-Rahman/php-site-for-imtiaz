
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>topics| @usrname</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <form style="box-shadow: 0px 0px 16px 0px #d1d0d0;" class=" gap-4 w-full p-1 xs:p-2 sm:p-6 md:p-16 rounded-xl"
        action="" method="post">


       


        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 1" name="top" id="">


        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 2" name="topt" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 3" name="toptt" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 4" name="topttt" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 5" name="toptttt" id="">
        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Topics 6" name="topa" id="">



        <div class="flex justify-start items-center"><button name="addtopics"
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">Add topics</button></div>


    </form>
</body>

</html>
<?php

require '../apis/connection.php';

if(isset($_POST['addtopics'])){

    $top1 = $_POST['top'];
    $top2 = $_POST['topt'];
    $top3 = $_POST['toptt'];
    $top4 = $_POST['topttt'];
    $top5 = $_POST['toptttt'];
    $top6 = $_POST['topa'];
    $getidsvao=$_GET['courseidvao'];


    $getidsvao = base64_decode(urldecode($getidsvao));
   

if ($top1==""||$top2==""||$top3==""||$top4==""||$top5==""||$top6=="") {
  echo '<center><p style="color: red">Achudar achuda, Tore Empty Rakhte bolci? 🙄</p></center>';
} else {
    $query = "INSERT INTO `learning_topics` (`serial`, `course_number`, `attract_points`, `attrack_point_t`, `attrack_point_tw`, `attrack_point_two`, `attrack_point_th`, `attrack_point_thr`) VALUES (NULL, '$getidsvao', '$top1', '$top2', '$top3', '$top4', '$top5', '$top6');";

        $result = $conn->query($query);
    
        if ($result == 1) {
            $getidsvao=base64_encode(urlencode($getidsvao));
            header("location: ./course-content-addiba-na.php?page=1&courseidvao=".$getidsvao);
        }
    
}



}

?>