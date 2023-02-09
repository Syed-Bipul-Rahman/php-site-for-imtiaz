<?php

include './nav.php';
require './apis/connection.php';


?>
    <section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 grid grid-cols-1 lg:grid-cols-2 items-center">
        <div class="text-center lg:text-start">
            <h1 class="font-black text-4xl">Leave Us A Message</h1>
            <p class="text-slate-500 text-lg my-4">Get in touch with us for any questions or feedback about our online courses. Our team is always available to help you. Simply leave us a message and we'll get back to you as soon as possible. Your satisfaction is our top priority. </p>
            <div class="flex items-center my-4 flex-col lg:flex-row">
                <i class="uil uil-envelope-alt text-6xl text-orange-500 mx-4"></i>
                <div>
                    <h6 class="font-bold text-xl my-2">Email Address :</h6>
                    <p class="text-lg text-slate-500">support@example.com</p>
                </div>
            </div>
            <div class="flex items-center my-4 flex-col lg:flex-row">
                <i class="uil uil-phone-volume text-6xl text-orange-500 mx-4"></i>
                <div>
                    <h6 class="font-bold text-xl my-2">Phone Number :</h6>
                    <p class="text-lg text-slate-500">+8802343546654</p>
                </div>
            </div>
            <div class="flex items-center my-4 flex-col lg:flex-row">
                <i class="uil uil-location-pin-alt text-6xl text-orange-500 mx-4"></i>
                <div>
                    <h6 class="font-bold text-xl my-2">Our Location :</h6>
                    <p class="text-lg text-slate-500">119/A, Mount View, London</p>
                </div>
            </div>
        </div>
        <form action="" method="post" style="box-shadow: 0px 0px 16px 0px #d1d0d0;" class=" gap-4 w-full p-1 xs:p-2 sm:p-6 md:p-16 rounded-xl">
            
                
                <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text" placeholder="Your Name" name="Name" id="">
            
            
            
                <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="email" placeholder="Your Email" name="email" id="">
            
            
                <input class="my-2 border border-slate-400 w-full h-12 rounded-md px-4 text-lg font-medium" type="text" placeholder="subject" name="subject" id="">
            
                <textarea class="my-2 border border-slate-400 w-full rounded-md px-4 text-lg font-medium" name="Comment" id="" rows="5" placeholder="Wright your message"></textarea>
            
            <div class="flex justify-start items-center"><button class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300" name="sub" type="submit">Submit</button></div>
        </form>
    </section>
    <?php
    if (isset($_POST['sub'])) {
        $name = $_POST['Name'];
        $email = $_POST['email'];
        $sub = $_POST['subject'];
        $comment = $_POST['Comment'];

        // INSERT INTO `contact` (`c_id`, `name`, `email`, `subject`, `message`) VALUES (NULL, 'Syed Bipul Rahman', 'this@mail.com', 'fasdfasdfasdfsdfasdfs', 'aasdffhjlhgfyyfhfgff');

        $usermsg = "INSERT INTO `contact` (`c_id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$sub', '$comment');";

    $result = $conn->query($usermsg);
        if ($result) {
            echo "<script>alert('Your message has been sent successfully.')</script>";
        } else {
            echo "<script>alert('Something went wrong.')</script>";
        }
    }



include './footer.php';



?>
</body>
</html>