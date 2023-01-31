<?php
if(isset($_SESSION["uid"])){

    header("location: ./users");
  
  }
include './nav.php';


?>
<!-- <header
        class="w-full flex justify-center items-center flex-col pb-12 pt-20 sm:pb-16 sm:pt-24 md:pb-24 md:pt-32 lg:pb-28 lg:pt-36 xl:pb-32 xl:pt-40">
        <h1 class="text-4xl font-bold text-white my-6 sm:text-5xl">Our Courses</h1>
        <p class="text-white text-lg font-semibold">Home > Courses</p>
    </header> -->
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 flex justify-center">
    <div style="box-shadow: 3px 2px 19px #7e7979;" class="xs:p-4 sm:p-6 md:p-8 lg:p-12 lg:w-2/5 rounded-xl">
        <form action="./apis/register.php" method="post">
            <div class="my-4">
                <label class="my-2 text-xl font-semibold" for="name">Name :</label>
                <input class="w-full border border-slate-400 h-14 p-2 my-2 rounded-md" type="text" name="name" placeholder="Your Name">
            </div>
            <div class="my-4">
                <label class="my-2 text-xl font-semibold" for="email">E-mail :</label>
                <input class="w-full border border-slate-400 h-14 p-2 my-2 rounded-md" type="email" name="email" placeholder="E-mail">
            </div>
            <div class="my-4">
                <label class="my-2 text-xl font-semibold" for="pass">Password :</label>
                <input class="w-full border border-slate-400 h-14 p-2 my-2 rounded-md" type="password" name="pass" placeholder="Password">
            </div>
            <div class="my-4">
                <label class="my-2 text-xl font-semibold" for="password_confirm">Confirm Password :</label>
                <input class="w-full border border-slate-400 h-14 p-2 my-2 rounded-md" type="password" name="password_confirm" placeholder="Confirm Password">
            </div>
            <div class="my-4 flex justify-between items-center">
                <button type="submit" class="px-6 py-2 bg-orange-500 text-white rounded-md font-bold text-center text-lg uppercase">Register</button>
                <p class="text-center font-medium">Alrady have an account?<a class="mx-2 text-orange-500 hover:text-blue-800 transition-all " href="./login.php">Login</a></p>
            </div>
            <?php 
            
            if(isset($_SESSION['userexist'])){
                echo '<p style="color: red" class="text-center text-red-500 font-semibold">'.$_SESSION['userexist'].'</p>';
                unset($_SESSION['userexist']);
            }elseif(isset($_SESSION['passnotmatch'])){
                echo '<p style="color: red" class="text-center text-red-500 font-semibold">'.$_SESSION['passnotmatch'].'</p>';
                unset($_SESSION['passnotmatch']);
            }
            
            ?>
        </form>
    </div>
</section>


<?php

include './footer.php';



?>


</body>

</html>