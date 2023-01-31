<?php

include './nav.php';



?>
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 grid grid-cols-1 lg:grid-cols-2 gap-10">


    <?php
        include './apis/connection.php';

        $sql = 'SELECT * FROM `webnear`';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?><a class="hover:text-orange-500" href="./webinar.php?hudai=joybangla&webnearxyz=<?php echo base64_encode(urlencode($row["wegnearid"])); ?>&aha=kihobe">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 p-6 items-center rounded-xl web">
        <img loading="lazy" style="height: 100%;" class="rounded-lg w-full h-full" src="<?php echo $row["web_img"]; ?>" alt="">
        <div>
            
                <h2 class="text-2xl font-bold"><?php echo substr($row["web_title"],0,30); ?></h2>
            
            <div class="flex my-4 text-orange-500 font-semibold">
                <i class="uil uil-calendar-alt"></i>
                <p class="mx-2"><?php echo $row["date"]; ?></p>
                <i class="uil uil-clock"></i>
                <p class="mx-2"><?php echo $row["time"]; ?></p>
            </div>
            <p class="text-lg text-slate-500 font-medium"><?php echo substr($row["description"],0,55); ?>[...]</p>
            
                <div
                    class="border-orange-500 border hover:bg-orange-500 hover:text-white font-bold text-xl text-orange-500 text-center py-2 w-36 rounded-md my-4">
                    Read More</div>
          
        </div>
    </div>   </a><?php

//echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>

</section>
<?php

include './footer.php';



?>
</body>

</html>