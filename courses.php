<?php

include './nav.php';



?>

<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 flex justify-between">

    <div class=" w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

        <?php
        include './apis/connection.php';

        $sql = 'SELECT `course_number`,`img`,`price`,`title`,`ratings`,`duration`,`total_sold` FROM `new_course`';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>

                <div class="rounded-xl overflow-hidden shadow-lg">
                    <a href="./course.php?courseid=somthing&joybanglacourseidxyz=<?php echo base64_encode(urldecode($row['course_number'])); ?>&coursename=something"><img loading="lazy" style="height: 250px;" class="w-full" src="<?php echo $row["img"]; ?>" alt="<?php echo $row["title"]; ?>"></a>
                    <div class="p-4">
                        <div class="flex text-lg">
                            <span class="text-orange-400">
                                <i class="uis uis-star"></i><i class="uis uis-star"></i><i class="uis uis-star"></i>
                                <i class="uis uis-star"></i><i class="uil uil-star"></i>
                            </span>
                            <h4 class="mx-4 font-semibold"><?php echo $row["ratings"]; ?></h4>
                            <p class="text-slate-600 font-medium">(<?php echo $row["total_sold"]; ?>)</p>
                        </div>
                        <a href="./course.php?joybanglacourseidxyz=<?php echo base64_encode(urldecode($row['course_number'])); ?>">
                            <h1 class="font-bold text-xl my-3 hover:text-orange-500"><?php echo $row["title"]; ?></h1>
                        </a>
                        <div class="flex text-slate-600 font-medium">
                            <p class="mr-4"><i class="uil uil-user"></i><?php echo $row["total_sold"]; ?></p>
                            <p><i class="uil uil-clock-three"></i><?php echo $row["duration"]; ?></p>
                        </div>
                        <!-- <div class="flex items-center mt-4">
                            <div class="rounded-full w-12 h-12 bg-orange-600 mr-4 text-white flex justify-center items-center text-xl font-semibold">A</div>
                            <p class="text-slate-600 font-medium mr-1">By</p>
                            <a class="text-xl font-semibold hover:text-orange-500" href="#">Amir</a>
                        </div> -->
                    </div>
                    <hr>
                    <div class="p-4 flex justify-between items-center">
                        <p class="text-xl font-bold text-orange-500">৳ <?php echo $row["price"]; ?></p>
                      <a href="./cart.php?ocuourse=<?php echo base64_encode(urldecode($row['course_number'])); ?>">  <button name="adcart" class="bg-slate-200 rounded-lg font-medium py-2 px-3 cursor-pointer hover:bg-orange-600 hover:text-white"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button></a>
                    </div>
                </div>

        <?php

                //echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <!-- <div class="w-full col-span-1 md:col-span-2 xl:col-span-3 flex justify-between items-center my-6">
            <p class="font-medium">Page <span>2</span> of <span>2</span></p>
            <div class="flex">
                <div class="rounded-lg w-10 h-10 bg-slate-200 cursor-pointer hover:bg-orange-600 mx-2 hover:text-white flex justify-center items-center text-xl font-semibold"><i class="uil uil-angle-left"></i></div>
                <div class="rounded-lg w-10 h-10 bg-slate-200 cursor-pointer hover:bg-orange-600 mx-2 hover:text-white flex justify-center items-center text-xl font-semibold">1</div>
                <div class="rounded-lg w-10 h-10 bg-slate-200 cursor-pointer hover:bg-orange-600 mx-2 hover:text-white flex justify-center items-center text-xl font-semibold">2</div>
                <div class="rounded-lg w-10 h-10 bg-slate-200 cursor-pointer hover:bg-orange-600 mx-2 hover:text-white flex justify-center items-center text-xl font-semibold"><i class="uil uil-angle-right"></i></div>
            </div>
        </div> -->
    </div>
</section>
<?php include './footer.php' ?>
</body>

</html>