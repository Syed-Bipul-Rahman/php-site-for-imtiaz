<?php
include 'nav.php';
if(isset($_SESSION["uid"])){

   header("location: ./users");
  
  }

require './apis/connection.php';
if (isset($_POST['sub'])) {
    $email = mysqli_real_escape_string($conn,$_POST['uname']);
    $password = md5($_POST['pass']);

    $userhasornot = "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'";

    $result = $conn->query($userhasornot);
   
   if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            
            $_SESSION["uid"]=$email;

            echo "<script>window.location.href='./users';</script>";
        } 
   } else {
    $_SESSION["errorlogin"]="User name or Password Incorrect";
   }
   $conn->close();
}
?>

<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 flex justify-center">
    <div style="box-shadow: 3px 2px 19px #7e7979;" class="xs:p-4 sm:p-6 md:p-8 lg:p-12 lg:w-2/5 rounded-xl">
        <h1 class="text-3xl font-bold my-6">Hi, Welcome back!</h1>
        <form action="" method="post">
            <input class="w-full border border-slate-400 h-12 p-2 my-2 rounded-md" type="email" name="uname" id=""
                placeholder="Email Address">
            <input class="w-full border border-slate-400 h-12 p-2 mt-2 rounded-md" type="password" name="pass" id=""
                placeholder="Password">

            <div class="flex justify-between text-lg my-8">
                <div>
                    <input type="checkbox" name="keep" id="">
                    <label class="font-bold mx-2" for="keep">Keep me signed in</label>
                </div>


                <a href="">
                    <p class="font-medium hover:text-orange-500">Forget?</p>
                </a>
            </div>
            <input type="submit" name="sub" value="Sign in"
                class="w-full cursor-pointer py-2 bg-orange-500 text-white rounded-md font-bold text-center text-lg uppercase" />

        </form>


        <P><?php if (isset($_SESSION["errorlogin"])) {
    echo $_SESSION["errorlogin"];
} ?></P>

        <p class="text-center text-lg font-medium mt-6">Don't have an account?<a
                class="mx-2 text-orange-500 hover:text-blue-800 transition-all " href="./register.php">Register
                Now</a></p>
    </div>

</section>

<?php include './footer.php'; ?>
</body>

</html>