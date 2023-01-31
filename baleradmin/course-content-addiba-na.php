<?php

if($_GET['page'] = 7){
    header("location: ../users");
}
?>
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



        Content <?php echo $j=mysqli_real_escape_string($conn,$_GET['page']); ?>

        <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text"
            placeholder="Content <?php echo $j; ?>" name="top" id="">





        <div class="flex justify-between">

            <div class="flex justify-start items-center"><button name="addtopics"
                    class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                    type="submit">Add Content</button></div>
            <a href="./succeess.html">
                <div class="flex py-3 justify-start items-center"><input style="background-color:green;"
                        class="uppercase cursor-pointer py-3 px-8 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                        type="" value="Done"/></div>
            </a>
        </div>
    </form>
</body>

</html>
<?php

require '../apis/connection.php';

if(isset($_POST['addtopics'])){

    $top1 = $_POST['top'];
   

    $getidsvao=$_GET['courseidvao'];
    $getidsvao = base64_decode(urldecode($getidsvao));
   

if ($top1=="") {
  echo '<center><p style="color: red">Achudar achuda, Tore Empty Rakhte bolci? 🙄</p></center>';
} else {
    $query = "INSERT INTO `course_contents` (`serial`, `course_number`, `title`) VALUES (NULL, '$getidsvao', '$top1');";
    $i=1;
        $result = $conn->query($query);
    
        if ($result == 1) {

            $j=$_GET['page'];

            $i=$j+1;
            header("location: ./course-content-addiba-na.php?courseidvao=".base64_encode(urlencode($getidsvao))."&page=".$i);
        }
    
}



}

?>