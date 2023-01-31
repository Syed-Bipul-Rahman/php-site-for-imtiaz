<footer class="w-full bg-[#0e0a38] px-0 xs:px-2 sm:px-6 lg:px-12 text-white text-xl font-bold">
    <div class="py-20 lg:flex">
        <div class="px-4">
            <img loading="lazy" class="h-10" src="./logo2.png" alt="">
            <p class="my-4">We are providing high-quality online courses for about ten years. Our all instructors expert
                and highly experienced. We provide all kinds of course materials to our students</p>
            <div class="flex items-center">
                <p>Follow Us</p>
                <a href=""><i style="color: #0e0a38; height: 40px;width: 40px;" class="flex items-center justify-center fa-brands text-center fa-facebook-f mx-2 bg-white rounded-full"></i></a>
                <a href=""><i style="color: #0e0a38; height: 40px;width: 40px;" class="flex items-center justify-center fa-brands text-center fa-twitter mx-2 bg-white rounded-full"></i></a>
                <a href=""><i style="color: #0e0a38; height: 40px;width: 40px;" class="flex items-center justify-center fa-brands text-center fa-linkedin mx-2 bg-white rounded-full"></i></a>
                <a href=""><i style="color: #0e0a38; height: 40px;width: 40px;" class="flex items-center justify-center fa-brands text-center fa-youtube mx-2 bg-white rounded-full"></i></a>
            </div>
        </div>
        <div class="w-full rounded-xl px-6">
            <h3 class="text-2xl my-4 font-bold">Recent Posts</h3>
            <div class="flex items-center">
                <?php

include './apis/connection.php';

$sql = "SELECT `posotid`,`titletaki`,`imgurlki` FROM `psblogvai`ORDER BY `posotid` DESC LIMIT 1";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>
                <img loading="lazy" class="h-24 w-24 rounded-md" src="<?php echo $row['imgurlki']; ?>"
                    alt="Sohoz-learning, android development">
                <div class="p-4">
                    <a href="./blog.php?joyposterjoyx=<?php echo base64_encode(urlencode($row['posotid'])); ?>"
                        class="font-bold text-sm mb-3 hover:text-orange-500 transition-all"><?php echo substr($row['titletaki'],0,45); ?>[...]</a>
                    <p class="text-xs text-slate-500">April 1, 2021</p>
                </div>
                <?php

                    }
                } else {
                    echo 'no recent post';
                } ?>
            </div>
        </div>
        <div class="w-full rounded-xl flex flex-col font-bold px-4">
            <h3 class="text-2xl my-4">Categories</h3>
<?php
include './apis/connection.php';
$sql5="SELECT `catagory_name` FROM `catagory`";

$result = $conn->query($sql5);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { ?>


            <a class="hover:text-orange-500 my-2" href=""><i
                    class="uil uil-angle-right mr-2 text-orange-500"></i><?php echo $row['catagory_name']; ?></a>
                    <?php

}
} else {
echo 'Catagory found';
} ?>
        </div>
        <div class="w-full font-bold px-4">
            <h3 class="text-2xl my-4">Contact Us</h3>
            <div class="flex my-6"><i class="uil uil-location-pin-alt text-orange-500 mr-2"></i>
                <p>Shamser Nagar Road, Matarkapon,
                    Moulvibazar</p>
            </div>
            <div class="flex my-6"><i class="uil uil-envelope-alt text-orange-500 mr-2"></i>
                <p>support@sohoz-learning.online</p>
            </div>
            <div class="flex my-6"><i class="uil uil-phone-volume text-orange-500 mr-2"></i>
                <p>+8801792932818</p>
            </div>
        </div>
    </div>
    <p class="py-4 border-t border-gray-600 text-center w-full font-sans font-medium text-white text-xl">© Copy 2021.
        All Rights Reserved <a style="color:#f97316" href="https://facebook.com/sohoz.learning.1">Sohoz Learning</a></p>
</footer>
<script src="./maine.js"></script>