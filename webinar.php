<?php

include './nav.php';
include './apis/connection.php';

$getidv=base64_decode(urldecode($_GET['webnearxyz']));


$sqliiii = "SELECT * FROM `webnear` WHERE `wegnearid`=$getidv;";

$result = $conn->query($sqliiii);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
?>


<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 flex flex-col items-center">
    <iframe class="rounded-2xl w-full" src="https://www.youtube.com/embed/x5Xp11pgxwE" height="500px"
        frameborder="0"></iframe>
    <div
        class="flex flex-col lg:flex-row items-center justify-between rounded-lg p-10 bg-white shadow-lg my-4 -mt-12 w-3/4">
        <div class="font-bold flex lg:text-2xl">
            <p><i class="uil uil-calendar-alt mx-1 text-orange-500"></i><?php echo $row["date"]; ?></p>
            <p class="mx-4"><i class="uil uil-clock mx-1 text-orange-500"></i><?php echo $row["time"]; ?></p>
            <p><i class="fa-solid fa-ticket text-orange-500 mx-1"></i>Free</p>
        </div>
        <a href="./register.php">
            <div class="px-8 py-4 rounded-lg text-white bg-orange-600 hover:bg-blue-900">FREE REGISTRATION</div>
        </a>
    </div>
</section>
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20 grid justify-center gap-4 lg:grid-cols-4">
    <div style="box-shadow: 0px 0px 20px 2px #afafaf;"
        class="h-40 w-40 rounded-full flex flex-col justify-center items-center">
        <p id="day" class="font-bold text-6xl">0</p>
        <p class="font-semibold text-lg my-2">Days</p>
    </div>
    <div style="box-shadow: 0px 0px 20px 2px #afafaf;"
        class="h-40 w-40 rounded-full flex flex-col justify-center items-center">
        <p id="hour" class="font-bold text-6xl">0</p>
        <p class="font-semibold text-lg my-2">Hours</p>
    </div>
    <div style="box-shadow: 0px 0px 20px 2px #afafaf;"
        class="h-40 w-40 rounded-full flex flex-col justify-center items-center">
        <p id="minute" class="font-bold text-6xl">0</p>
        <p class="font-semibold text-lg my-2">Minutes</p>
    </div>
    <div style="box-shadow: 0px 0px 20px 2px #afafaf;"
        class="h-40 w-40 rounded-full flex flex-col justify-center items-center">
        <p id="second" class="font-bold text-6xl">0</p>
        <p class="font-semibold text-lg my-2">Seconds </p>
    </div>
</section>

<script>
    var deadline = new Date("<?php echo $row["date"]; ?> <?php echo $row["time"]; ?>").getTime();
    var x = setInterval(function () {
        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        if (t < 0) {
            days=hours=minutes=seconds=0
        }
document.getElementById("day").innerHTML=days;
document.getElementById("hour").innerHTML=hours;
document.getElementById("minute").innerHTML=minutes;
document.getElementById("second").innerHTML=seconds;
        
    }, 1000);
</script>

<section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20 text-center lg:text-start">
    <h2 class="my-4 text-4xl font-bold">About The Webinar</h2>
    <p class="text-slate-500 font-medium"><?php echo $row["description"]; ?></p>
</section>

<?php

//echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
}
} else {
echo "no data";
}
$conn->close();
?>

<section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20">
    <h2 class="my-4 text-4xl font-bold text-center lg:text-start">What You Will Learn</h2>
    <div class="grid lg:grid-cols-2 gap-6">

<?php
$getidv=base64_decode(urldecode($_GET['webnearxyz']));
include('./apis/connection.php');
//SELECT * FROM `learning_topics` ORDER BY `attrack_point_t` ASC
$sqliiii1 = "SELECT * FROM `webneartopics` WHERE `webnear_id`=$getidv;";

$result = $conn->query($sqliiii1);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

?>

        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_o"]; ?></p>
        </div>
        
        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_on"]; ?></p>
        </div>
        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_one"]; ?></p>
        </div>
        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_tw"]; ?></p>
        </div>
        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_two"]; ?></p>
        </div>
        <div class="flex items-center">
            <i class="uil uil-check text-orange-600 mx-2 text-2xl"></i>
            <p><?php echo $row["topics_t"]; ?></p>
        </div>

        <?php

//echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
}
} else {
echo "0 results";
echo $getidv=base64_decode(urldecode($_GET['webnearxyz']));
}
$conn->close();
?>
        
    </div>
</section>
<!-- <section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20 text-center lg:text-start">
    <h2 class="my-4 text-4xl font-bold">Key Topic We Will Cover</h2>
    <ul class="grid lg:grid-cols-2 gap-6 list-disc px-8">
        <li>
            <h5 class="font-bold text-xl my-2">Proper Strategies</h5>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis, pulvinar dapibus leo.</p>
        </li>
        <li>
            <h5 class="font-bold text-xl my-2">Proper Strategies</h5>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis, pulvinar dapibus leo.</p>
        </li>
        <li>
            <h5 class="font-bold text-xl my-2">Proper Strategies</h5>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis, pulvinar dapibus leo.</p>
        </li>
        <li>
            <h5 class="font-bold text-xl my-2">Proper Strategies</h5>
            <p class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                ullamcorper mattis, pulvinar dapibus leo.</p>
        </li>
    </ul>
</section> -->
<!-- <section class="py-16px-0 xs:px-2 sm:px-6 lg:px-20 my-20 md:grid-cols-2 xl:grid-cols-4 grid">
        <h2 class="my-4 text-4xl font-bold md:col-span-2 xl:col-span-4">Speakers</h2>
        <div class="p-2 flex flex-col justify-center items-center rounded-md hover:shadow-lg">
            <img loading="lazy" class="rounded-md" src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2021/03/instructor-1-1.jpg" alt="">
            <h2 class="my-4 text-xl font-bold">Shane Warne</h2>
            <p>Instructor</p>
        </div>
        <div class="p-2 flex flex-col justify-center items-center rounded-md hover:shadow-lg">
            <img loading="lazy" class="rounded-md" src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2021/03/instructor-1-1.jpg" alt="">
            <h2 class="my-4 text-xl font-bold">Shane Warne</h2>
            <p>Instructor</p>
        </div>
        <div class="p-2 flex flex-col justify-center items-center rounded-md hover:shadow-lg">
            <img loading="lazy" class="rounded-md" src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2021/03/instructor-1-1.jpg" alt="">
            <h2 class="my-4 text-xl font-bold">Shane Warne</h2>
            <p>Instructor</p>
        </div>
        <div class="p-2 flex flex-col justify-center items-center rounded-md hover:shadow-lg">
            <img loading="lazy" class="rounded-md" src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2021/03/instructor-1-1.jpg" alt="">
            <h2 class="my-4 text-xl font-bold">Shane Warne</h2>
            <p>Instructor</p>
        </div>
    </section> -->
<!-- <section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20">
    <h2 class="my-4 text-4xl font-bold col-span-4">Free Registration Form</h2>
    <form style="box-shadow: 0px 0px 16px 0px #d1d0d0;" class="grid gap-4 grid-cols-2 w-full p-6 rounded-xl">
        <div class="col-span-2 lg:col-span-1">
            <label class="font-bold text-xl" for="fname">First Name :</label><br>
            <input class="my-2 w-full border border-slate-400 h-12 rounded-md px-4 text-lg font-medium" type="text"
                name="fName" id="">
        </div>
        <div class="col-span-2 lg:col-span-1">
            <label class="font-bold text-xl" for="lname">Last Name :</label><br>
            <input class="my-2 w-full border border-slate-400 h-12 rounded-md px-4 text-lg font-medium" type="text"
                name="lName" id="">
        </div>
        <div class="col-span-2">
            <label class="font-bold text-xl" for="email">Email :</label><br>
            <input class="my-2 w-full border border-slate-400 h-12 rounded-md px-4 text-lg font-medium" type="email"
                placeholder="you@domain.com" name="email" id="">
        </div>
        <div class="col-span-2">
            <label class="font-bold text-xl" for="call">Phone Number :</label><br>
            <input class="my-2 w-full border border-slate-400 h-12 rounded-md px-4 text-lg font-medium" type="tel"
                placeholder="your Phone Number" name="call" id="">
        </div>
        <div class="col-span-2">
            <label class="font-bold text-xl" for="Comment">Message (if any) :</label><br>
            <textarea class="my-2 w-full border border-slate-400 rounded-md px-4 text-lg font-medium" name="Comment"
                id="" rows="5"></textarea>
        </div>
        <div class="col-span-2 flex justify-start items-center"><button
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">Submit</button></div>

    </form>
</section> -->
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-20 grid grid-cols-1 lg:grid-cols-2 gap-10">
    <h2 class="my-4 text-4xl font-bold col-span-1 lg:col-span-2">Upcoming Webinars</h2>
    <?php
        include './apis/connection.php';

        $sql = 'SELECT * FROM `webnear`';

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>
    <a class="hover:text-orange-500"
        href="./webinar.php?hudai=joybangla&webnearxyz=<?php echo base64_encode(urlencode($row["wegnearid"])); ?>&aha=kihobe">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 p-6 items-center rounded-xl web">
            <img loading="lazy" style="height: 100%;" class="rounded-lg w-full" src="<?php echo $row["web_img"]; ?>"
                alt="">
            <div>
                <h2 class="text-2xl font-bold"><?php echo substr($row["web_title"],0,30); ?>[..]</h2>
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
        </div>
    </a>
    <?php

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