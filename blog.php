<?php

include './nav.php';

if (isset($_GET['joyposterjoyx'])) {
   


?>

<section class="px-0 xs:px-2 sm:px-6 md:px-14 lg:px-20 py-20 lg:flex lg:justify-between">

<?php
            $catched_course = $_GET['joyposterjoyx'];
            $catched_course =base64_decode(urldecode($catched_course));


            include './apis/connection.php';

            $sql = "SELECT * FROM `psblogvai` WHERE `posotid`=$catched_course";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    //echo $row['describtio'];

                    ?>

                  
    <div class="lg:w-2/3">
        <img loading="lazy" class="w-full rounded-xl"
            src="<?php echo $row['imgurlki']; ?>" alt="">
        <!-- <div class="md:flex my-6 font-semibold">
            <div class="flex">
                <p><i class="uil uil-user text-orange-500 mx-2"></i>AMIR</p>
                <p><i class="uil uil-calendar-alt text-orange-500 mx-2"></i>APRIL 1, 2021</p>
            </div>

            <p><i class="uil uil-tag-alt text-orange-500 mx-2"></i>PROGRAMMING, WEB DESIGN</p>
        </div> -->
        <a href="" class="text-3xl font-bold hover:text-orange-500"> <?php echo $row['titletaki']; ?> </a>
        <p class="my-6 text-slate-500 font-semibold text-md md:text-lg">

       <?php echo $row['bistarito']; ?>
        </p>


      <!--   <p class="my-6 text-slate-500 font-semibold text-md md:text-lg">Sed egestas, ante et vulputate volutpat, eros
            pede semper
            est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida
            id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum
            volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
            Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>

        <div class="my-6 bg-slate-100 p-6">
            <p class="font-semibold text-slate-500 italic tefxt-xl my-8">Morbi interdum mollis sapien. Sed ac risus.
                Phasellus lacinia, magna a ullamcorper laoreet, lectus arcu pulvinar risus, vitae facilisis libero
                dolor a purus. Sed vel lacus.</p>
            <p class="text-orange-500 font-bold text-xl">- Adam Smith</p>
        </div>
        <p class="my-6 text-slate-500 font-semibold text-md md:text-lg">Suspendisse mauris. Fusce accumsan mollis eros.
            Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa
            sit amet nibh viverra malesuada. Nunc sem lacus, accumsan quis, faucibus non, congue vel, arcu. Ut
            scelerisque hendrerit tellus. Integer sagittis. Vivamus a mauris eget arcu gravida tristique. Nunc
            iaculis mi in ante. Vivamus imperdiet nibh feugiat est.</p>
        <h6 class="text-3xl font-semibold">Effective Ways</h6>
        <p class="my-6 text-slate-500 font-semibold text-md md:text-lg">Ut convallis, sem sit amet interdum
            consectetuer, odio
            augue aliquam leo, nec dapibus tortor nibh sed augue. Integer eu magna sit amet metus fermentum posuere.
            Morbi sit amet nulla sed dolor elementum imperdiet. Quisque fermentum. Cum sociis natoque penatibus et
            magnis xdis parturient montes, nascetur ridiculus mus. Pellentesque adipiscing eros ut libero. Ut
            condimentum mi vel tellus. Suspendisse laoreet. Fusce ut est sed dolor gravida convallis. Morbi vitae
            ante. Vivamus ultrices luctus nunc. Suspendisse et dolor. Etiam dignissim. Proin malesuada adipiscing
            lacus. Donec metus. Curabitur gravida</p>
        <img loading="lazy" src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2021/04/img-lg-1-1024x584.jpg"
            alt="">
        <p class="my-6 text-slate-500 font-semibold text-md md:text-lg">Sed egestas, ante et vulputate volutpat, eros
            pede semper
            est, vitae luctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida
            id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. Vestibulum
            volutpat, lacus a ultrices sagittis, mi neque euismod dui, eu pulvinar nunc sapien ornare nisl.
            Phasellus pede arcu, dapibus eu, fermentum et, dapibus sed, urna.</p>
        <ul class="my-6 text-slate-500 font-medium text-lg list-disc list-inside">
            <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod</li>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue</li>
            <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem
                tristique cursus.</li>
        </ul> -->

    </div>

    <?php
                }
            } else {
                echo "No Description found for this course";
            }
            $conn->close();

            ?>


    <?php
include './blog-aside.php';
?>


</section>
<?php
}else{
    echo '<div class="mx-4 font-bold hover:text-orange-600">Page not found</div>';
}
include './footer.php';



?>
</body>

</html>