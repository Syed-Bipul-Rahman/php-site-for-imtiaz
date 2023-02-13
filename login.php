<?php 
    session_start();
if(isset($_SESSION["uid"])){
 // User is already logged in, redirect to the home page
    header("Location: ./");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Ensure your career" />
    <meta name="author" content="Sohoz Learning" />
    <meta property="og:image" content="/joybanga.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/28381dd01b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="style.css">
    <title>Sohoz Learning</title>
</head>

<body style="font-family: 'Rajdhani', sans-serif;">
    <nav id="nav z-10"
        class="flex w-full px-0 py-0 xs:py-1 sm:py-2 md:py-3 justify-between bg-white items-center fixed xs:px-2 sm:px-4 md:px-8 lg:px-12 xl:20">
        <a href="./"><img loading="lazy" class="h-10" src="./logo.png" alt="Sohoz Leaning"></a>
        <div class="flex">
            <div class="lg:hidden my-2 md:my-1">
                <a href="./login.php"><i
                        class="fa-solid fa-user bg-orange-500 text-white p-2 md:p-3 mx-1 xs:mx-2 rounded-md"></i></a>
                <i class="fa-solid border border-orange-500 md:p-3 fa-bars p-2 rounded-md" onclick="var mobail = document.getElementById('m-manu').style;if(mobail.right=='-2000px'){mobail.right='0px'}else{mobail.right='-2000px'}"></i>
            </div>
            <ul class="items-center text-lg hidden lg:flex">
                <li class="mx-4 font-bold flex items-center hover:text-orange-600 h-10 drop"><a
                        href="./courses.php">Courses</a>
                    <i class="fa-solid fa-chevron-down ml-1"></i>
                    <ul
                        class="absolute rounded-md border-orange-600 w-28 z-10 bg-white mt-36 sdrop shadow-xl truncate transition-all h-0">
                        <li class="px-3 py-1 text-black hover:text-orange-600 di1"><a href="./courses.php">Android</a>
                            <!-- <ul
                                class="rounded-md border-t-2 bg-white border-orange-600 z-10 absolute -mt-8 text-black hidden dis1 shadow-xl">
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 1</a></li>
                                <hr>
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 2</a></li>
                            </ul> -->
                        </li>
                        <hr>
                        <li class="px-3 py-1 text-black hover:text-orange-600 di1"><a href="">Graphices</a>
                            <!-- <ul
                                class="rounded-md bg-white border-t-2 border-orange-600 z-10 absolute -mt-8 text-black hidden dis1 shadow-xl">
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 3</a></li>
                                <hr>
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 4</a></li>
                            </ul> -->
                        </li>
                        <hr>
                         <!-- <li class="px-3 py-1 text-black hover:text-orange-600 di1"><a href="">Digital Marketing</a>
                           <ul
                                class="rounded-md border-t-2 bg-white border-orange-600 z-10 absolute -mt-8 text-black hidden dis1 shadow-xl">
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 5</a></li>
                                <hr>
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 6</a></li>
                            </ul> 
                        </li>-->
                    </ul>
                </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="./webinars.php">Webinars</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="./blogs.php">Blog</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="./about.php">About Us</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="./contact.php">Contact</a> </li>
                <a href="./cart.php">
                    <li class="mx-4 font-bold hover:text-orange-600 cursor-pointer text-2xl flex"><i
                            class="fa-solid fa-cart-shopping"></i>
                        <div
                            class="h-5 w-5 bg-orange-500 rounded-full -ml-1 -mt-2 flex items-center justify-center text-sm text-white">
                            <?php
                            if (isset($_SESSION['xcartcoursex'])) {
                                echo '<p>1</p>'; 
                            }else {
                                echo 0;
                            }
                            ?></div>
                    </li>
                </a>
            </ul>
            <?php
                            if (!isset($_SESSION["uid"])) {
                                echo '<div class="hidden ml-8 px-6 bg-orange-500 py-2 rounded items-center font-semibold text-white lg:flex">
                                <a class="border-r-2 px-3 hover:text-black" href="./login.php">Login</a>
                                <a class="px-3 hover:text-black" href="./register.php">Register</a>
                            </div>'; 
                            }else {
                                echo '<div class="hidden ml-8 px-6 bg-orange-500 py-2 rounded items-center font-semibold text-white lg:flex">
                                <a class="border-r-2 px-3 hover:text-black" href="./user/dist">Dashbord</a>
                                <a class="px-3 hover:text-black" href="./apis/logout.php">Logout</a>
                            </div>';
                            }
                            ?>

            
        </div>
        <div id="m-manu" style="right: -2000px;top: 70px;height: 85vh;width: 85vw;border-bottom-left-radius: 20px;background: linear-gradient(#fff,#7fffd4);"
            class="flex-col absolute">

            <ul class=" text-2xl">
                <li class="mx-4 my-4 font-semibold"><div onclick="var c=document.getElementById('cata-nav'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="flex justify-between mr-4 items-center"><a href="./courses.php">Courses</a>
                    <i class="fa-solid fa-chevron-down ml-1"></i></div>
                    <ul id="cata-nav" class="mx-4 hidden">
                        <li onclick="var c=document.getElementById('cata-1'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Android
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-1" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        </li>
                        <li onclick="var c=document.getElementById('cata-2'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Graphice
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-2" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        </li>
                        <li onclick="var c=document.getElementById('cata-3'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Markting
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-3" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        </li>
                    </ul>
                   
                </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="./webinars.php">Webinars</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="./blogs.php">Blog</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold"> <a href="./about.php">About Us</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="./contact.php">Contact</a> </li>
                <hr />
                <a href="./cart.php">
                    <li
                        class="mx-4 my-4 font-semibold  cursor-pointer text-2xl flex">Cart
                        <i class="fa-solid fa-cart-shopping"></i>
                        <div
                            class="h-5 w-5 bg-orange-500 rounded-full -ml-1 -mt-2 flex items-center justify-center text-sm text-white">
                            <?php
                            if (isset($_SESSION['xcartcoursex'])) {
                                echo '<p>1</p>'; 
                            }else {
                                echo 0;
                            }
                            ?></div>
                    </li>
                </a>
                <hr />
            </ul>
            <?php
                            if (!isset($_SESSION["uid"])) {
                                echo '<div style="position: absolute;bottom: 0;" class="font-semibold text-white w-full text-2xl p-6 text-center">
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="./login.php">Login</a></div>
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="./register.php">Register</a></div>
                            </div>'; 
                            }else {
                                echo '<div style="position: absolute;bottom: 0;" class="font-semibold text-white w-full text-2xl p-6 text-center">
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="./user/dist/">Dashbord</a></div>
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="./apis/logout.php">Logout</a></div>
                            </div>'; 
                            }
                            ?>
            
        </div>
    </nav>
<?php
require_once("./login-page-con.php");
 include './footer.php'; ?>
</body>

</html>