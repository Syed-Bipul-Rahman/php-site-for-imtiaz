<?php

include './nav.php';



?>
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 lg:flex lg:justify-between">
    <div class="lg:w-2/3">
        <?php
        include './apis/connection.php';

        $sql = 'SELECT * FROM `psblogvai` ORDER BY `psblogvai`.`posotid` DESC';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                //echo $row['imgurlki']; 
        ?>


                <div class="mb-10">
                    <img loading="lazy" style="height: 320px;" class="w-full rounded-xl" src="<?php echo $row['imgurlki']; ?>" alt="<?php echo $row['titletaki']; ?>">
                    <div class="md:flex my-6 font-semibold">
                        <!-- <div class="flex"><p><i class="uil uil-user text-orange-500 mx-2"></i>AMIR</p> -->
                        <p><i class="uil uil-calendar-alt text-orange-500 mx-2"></i>APRIL 1, 2021</p>
                    </div>

                    <!-- <p><i class="uil uil-tag-alt text-orange-500 mx-2"></i>PROGRAMMING, WEB DESIGN</p> -->

                    <a href="./blog.php?joyposterjoyx=<?php echo base64_encode(urlencode($row['posotid'])); ?>" class="text-3xl font-bold hover:text-orange-500"><?php echo $row['titletaki']; ?></a>
                    <a href="./blog.php?joyposterjoyx=<?php echo base64_encode(urlencode($row['posotid'])); ?>">
                        <p class="my-6 text-slate-500"><?php echo substr($row['bistarito'], 0, 337); ?> […]</p>
                    </a>

                    <a href="./blog.php?joyposterjoyx=<?php echo base64_encode(urlencode($row['posotid'])); ?>" class="uppercase py-4 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md">read
                        more</a>
                </div>




        <?php

                //echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

    </div>
    

<?php
include './blog-aside.php';

?>


</section>
<?php

include './footer.php';



?>
</body>

</html>