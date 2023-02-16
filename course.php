<?php

include './nav.php';



?>
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 lg:flex lg:justify-between">
    <div class="lg:w-2/3">
        <!-- <div class="flex lg:items-center flex-col lg:flex-row">
                <div class="flex items-center">
                    <div
                    class="rounded-full w-12 h-12 bg-orange-600 mr-4 text-white flex justify-center items-center text-xl font-semibold">
                    A</div>
                <p class="text-slate-600 font-medium mr-1">By</p>
                <a class="text-xl font-semibold hover:text-orange-500" href="">Amir</a>
                </div>
                
                <div class="flex my-4 lg:my-0"><span class="text-orange-400 text-lg lg:ml-4">
                    <i class="uis uis-star"></i><i class="uis uis-star"></i><i class="uis uis-star"></i>
                    <i class="uis uis-star"></i><i class="uil uil-star"></i>
                </span>
                <h4 class="mx-4 font-semibold">4.00</h4>
                <p class="text-slate-600 font-medium">(11 Ratings)</p></div>
                <div class="flex"><i class="uil uil-bookmark lg:ml-12 mr-4 text-lg font-semibold cursor-pointer hover:text-orange-500">
                    Wishlist</i>
                <i class="uil uil-share text-lg font-semibold cursor-pointer hover:text-orange-500"> share</i></div>
            </div>
            <div class="inline-grid sm:flex items-center mb-8 mt-4">
                <h4 class="text-slate-600 mr-2">Categories:</h4>
                <div
                    class="py-2 px-4 bg-slate-100 hover:bg-orange-600 text-slate-500 hover:text-white rounded-md cursor-pointer m-2">
                    Marketing</div>
                <div
                    class="py-2 px-4 bg-slate-100 hover:bg-orange-600 text-slate-500 hover:text-white rounded-md cursor-pointer m-2">
                    Development</div>
                <div
                    class="py-2 px-4 bg-slate-100 hover:bg-orange-600 text-slate-500 hover:text-white rounded-md cursor-pointer m-2">
                    Business</div>
            </div> -->
        <div class="flex">
            <p class="mx-4 font-medium leading-10 border-b-2 cursor-pointer border-orange-500 text-orange-500">Course
                Info</p>
            <p class="mx-4 font-medium leading-10 cursor-pointer">Reviews</p>
        </div>
        <hr>
        <h5 class="my-4 text-lg font-bold mx-1">About Course</h5>
        <div id="aboutc" class="overflow-hidden transition-all h-20">


            <?php
            $catched_course = $_GET['joybanglacourseidxyz'];
            $catched_course = base64_decode(urldecode($catched_course));


            include './apis/connection.php';

            $sql = "SELECT `describtio` FROM `new_course` WHERE `course_number`=$catched_course";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo $row['describtio'];
                }
            } else {
                echo "No Description found for this course";
            }
            $conn->close();

            ?>


        </div>
        <div class="hover:text-orange-500 text-lg my-8 flex cursor-pointer font-medium text-slate-500" onclick="show()">
            <i id="icon" class="uil uil-plus mx-2"></i>
            <p>Show More</p>
        </div>

        <h5 class="my-4 text-lg font-bold mx-1">What Will You Learn?</h5>
        <ul class="grid grid-cols-1 lg:grid-cols-2 gap-6 list-disc text-lg list-inside">
            <?php
            include './apis/connection.php';



            $topis = "SELECT * FROM `learning_topics` WHERE `course_number`=$catched_course";
            $result = $conn->query($topis);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>

                    <li><?php echo  $row['attract_points']; ?></li>
                    <li><?php echo  $row['attrack_point_t']; ?></li>
                    <li><?php echo  $row['attrack_point_tw']; ?></li>
                    <li><?php echo $row['attrack_point_two']; ?></li>
                    <li><?php echo  $row['attrack_point_th']; ?></li>
                    <li><?php echo $row['attrack_point_thr']; ?></li>
            <?php
                    // echo $row['describtio'];
                }
            } else {
                echo "No Data found for this course";
            }
            $conn->close();

            ?>
        </ul>
        <h5 class="my-4 text-lg font-bold mx-1">Course Content</h5>
        <?php
        include './apis/connection.php';
        $contents = "SELECT * FROM `course_contents`WHERE `course_number` =$catched_course ORDER BY `serial`  ASC";
        $result = $conn->query($contents);
        $x = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ++$x;
        ?>

                <div id="op<?php echo $x; ?>" class="rounded-lg border border-slate-400 overflow-hidden my-4 h-14">
                    <div id="ro<?php echo $x; ?>" onclick="work('ro<?php echo $x; ?>')" class="flex border-b border-slate-400 justify-between items-center p-3 font-bold text-lg bg-slate-50 cursor-pointer hover:text-orange-500">
                        <p><?php echo $row['title']; ?></p>
                        <i id="al<?php echo $x; ?>" class="uil uil-angle-right text-orange-500 text-3xl leading-8"></i>
                    </div>
                    <!-- more -->
                    <div class="flex justify-between items-center p-2 font-medium text-slate-500 hover:bg-slate-100 cursor-pointer">
                        <div class="flex">
                            <i class="uil uil-youtube mx-2"></i>
                            <p>Basic Definitions</p>
                        </div>
                        <div class="flex">
                            <p>07:00</p>
                            <i class="uil uil-lock-alt mx-2"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-2 font-medium text-slate-500 hover:bg-slate-100 cursor-pointer">
                        <div class="flex">
                            <i class="uil uil-youtube mx-2"></i>
                            <p>Basic Definitions</p>
                        </div>
                        <div class="flex">
                            <p>07:00</p>
                            <i class="uil uil-lock-alt mx-2"></i>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-2 font-medium text-slate-500 hover:bg-slate-100 cursor-pointer">
                        <div class="flex">
                            <i class="uil uil-youtube mx-2"></i>
                            <p>Basic Definitions</p>
                        </div>
                        <div class="flex">
                            <p>07:00</p>
                            <i class="uil uil-lock-alt mx-2"></i>
                        </div>
                    </div>
                </div>


        <?php
                // echo $row['describtio'];
            }
        } else {
            echo "No Data found for this course";
        }
        $conn->close();

        ?>
    </div>
    <aside class="lg:w[30%]">
        <div class="rounded-xl overflow-hidden w-full shadow-xl">
            <iframe class="w-full" src="https://www.youtube.com/embed/x5Xp11pgxwE" allowfullscreen=frameborder="0"></iframe>
            <div class="p-4">

                <?php
                $catched_course = $_GET['joybanglacourseidxyz'];
                $catched_course = base64_decode(urldecode($catched_course));

                include './apis/connection.php';

                $sql = "SELECT `course_number`,`price`,`total_sold`,`duration`,`lastupdate`,`lesson` FROM `new_course` WHERE `course_number`=$catched_course";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>




                        <p class="text-3xl my-2 font-bold">৳ <?php echo $row['price']; ?> </p>
                        <a href="./cart.php?ocuourse=<?php echo base64_encode(urldecode($row['course_number'])); ?>">
                            <h4 class="w-full text-center py-3 bg-orange-500 text-xl font-bold rounded-lg text-white my-4">
                                Enroll Now</h4>
                        </a>
                        <p class="text-slate-600 text-center font-medium">Free access this course</p>
            </div>
            <hr>
            <div class="p-4 grid grid-cols-2">
                <div class="flex text-slate-600 font-medium my-1">
                    <i class="uil uil-signal mx-2"></i>
                    <p>Level</p>
                </div>
                <p class="font-medium my-1">All Levels</p>
                <div class="flex text-slate-600 font-medium my-1">
                    <i class="uil uil-graduation-cap mx-2"></i>
                    <p>Total</p>
                </div>
                <p class="font-medium my-1"><?php echo $row['total_sold']; ?> Enrolled</p>
                <div class="flex text-slate-600 font-medium my-1">
                    <i class="uil uil-clock mx-2"></i>
                    <p>Duration</p>
                </div>
                <p class="font-medium my-1"><?php echo $row['duration']; ?></p>
                <div class="flex text-slate-600 font-medium my-1">
                    <i class="uil uil-sync mx-2"></i>
                    <p>Last Updated</p>
                </div>
                <p class="font-medium my-1"><?php echo $row['lastupdate']; ?></p>
                <div class="flex text-slate-600 font-medium my-1">
                    <i class="uil uil-book-open mx-2"></i>
                    <p>Lessons</p>
                </div>
                <p class="font-medium my-1"><?php echo $row['lesson']; ?> Lessons</p>
            </div>
        </div>
<?php
                        // echo $row['describtio'];
                    }
                } else {
                    echo "No Data found for this course";
                }
                $conn->close();

?>
<!-- <div class="rounded-xl overflow-hidden w-full shadow-xl p-6 my-8">
    <h5 class="my-4 text-xl font-bold mx-1">Course Content</h5>
    <ul class="list-disc text-lg list-inside">
        <li>7.5 hours on-demand video</li>
        <li>10 articles</li>
        <li>31 downloadable resources</li>
        <li>Full lifetime access</li>
        <li>Access on mobile and TV</li>
        <li>Certificate of Completion</li>
    </ul>
</div> -->
    </aside>
</section>
<?php

include './footer.php';



?>
</body>

</html>