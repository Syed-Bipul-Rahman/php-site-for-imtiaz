<?php
session_start();

if(!isset($_SESSION["uid"])){
    // User is already logged in, redirect to the home page
       header("Location: ../../just.html");
       exit();}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Ensure your career" />
    <meta name="author" content="Sohoz Learning" />
    <meta property="og:image" content="../../joybanga.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/28381dd01b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="../../style.css"> 
    <link rel="stylesheet" href="./assets/index-c3acd361.css">
    <title>Sohoz Learning</title>
 
</head>

<body style="font-family: 'Rajdhani', sans-serif;">
    <nav id="nav z-10"
        class="flex w-full px-0 py-0 xs:py-1 sm:py-2 md:py-3 justify-between bg-white items-center fixed xs:px-2 sm:px-4 md:px-8 lg:px-12 xl:20">
        <a href="./"><img loading="lazy" class="h-10" src="../../logo.png" alt="Sohoz Leaning"></a>
        <div class="flex">
            <div class="lg:hidden my-2 md:my-1">
                <a href="../../login.php"><i
                        class="fa-solid fa-user bg-orange-500 text-white p-2 md:p-3 mx-1 xs:mx-2 rounded-md"></i></a>
                <i class="fa-solid border border-orange-500 md:p-3 fa-bars p-2 rounded-md" onclick="var mobail = document.getElementById('m-manu').style;if(mobail.right=='-2000px'){mobail.right='0px'}else{mobail.right='-2000px'}"></i>
            </div>
            <ul class="items-center text-lg hidden lg:flex">
                <li class="mx-4 font-bold flex items-center hover:text-orange-600 h-10 drop"><a
                        href="../../courses.php">Courses</a>
                    <i class="fa-solid fa-chevron-down ml-1"></i>
                    <ul
                        class="absolute rounded-md border-orange-600 w-28 z-10 bg-white mt-36 sdrop shadow-xl truncate transition-all h-0">
                        <li class="px-3 py-1 text-black hover:text-orange-600 di1"><a href="../../courses.php">Android</a>
                            <!-- <ul
                                class="rounded-md border-t-2 bg-white border-orange-600 z-10 absolute -mt-8 text-black hidden dis1 shadow-xl">
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 1</a></li>
                                <hr>
                                <li class="px-3 py-1 hover:text-orange-600"><a href="">Season 2</a></li>
                            </ul> -->
                        </li>
                        <hr>
                        <li class="px-3 py-1 text-black hover:text-orange-600 di1"><a href="../../courses.php">Graphices</a>
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
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="../../webinars.php">Webinars</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="../../blogs.php">Blog</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="../../about.php">About Us</a> </li>
                <li class="mx-4 font-bold hover:text-orange-600"> <a href="../../contact.php">Contact</a> </li>
                <a href="../../cart.php">
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
                                <a class="border-r-2 px-3 hover:text-black" href="../../login.php">Login</a>
                                <a class="px-3 hover:text-black" href="../../register.php">Register</a>
                            </div>'; 
                            }else {
                                echo '<div class="hidden ml-8 px-6 bg-orange-500 py-2 rounded items-center font-semibold text-white lg:flex">
                                <a class="border-r-2 px-3 hover:text-black" href="">Dashbord</a>
                                <a class="px-3 hover:text-black" href="../../apis/logout.php">Logout</a>
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
                       <a href="./courses.php"> <li onclick="var c=document.getElementById('cata-1'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Android
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-1" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        </li></a>
                        <a href="./courses.php"><li onclick="var c=document.getElementById('cata-2'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Graphics
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-2" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        </li></a>
                        <!-- <li onclick="var c=document.getElementById('cata-3'); if(c.classList[1]=='hidden'){c.classList.remove('hidden');}else{c.classList.add('hidden')}" class="my-3 cursor-pointer">Markting -->
                        <!-- <i class="fa-solid fa-chevron-down mx-4"></i> -->
                            <!-- <ul id="cata-3" class="mx-4 hidden">
                                <li class="my-2">sieson-1</li>
                                <li class="my-2">sieson-2</li>
                            </ul> -->
                        <!-- </li> -->
                    </ul>
                   
                </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="../../webinars.php">Webinars</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="../../blogs.php">Blog</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold"> <a href="../../about.php">About Us</a> </li>
                <hr />
                <li class="mx-4 my-4 font-semibold "> <a href="../../contact.php">Contact</a> </li>
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
                                        href="../../login.php">Login</a></div>
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="../../register.php">Register</a></div>
                            </div>'; 
                            }else {
                                echo '<div style="position: absolute;bottom: 0;" class="font-semibold text-white w-full text-2xl p-6 text-center">
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="">Dashbord</a></div>
                                <div class="px-4 py-2 bg-orange-500 my-2 rounded-3xl"><a class="hover:text-black"
                                        href="../../apis/logout.php">Logout</a></div>
                            </div>'; 
                            }
                            ?>
            
        </div>
    </nav>


    <section class="px-0 xs:px-2 sm:px-6 lg:px-20 pt-20 flex items-center border border-b-slate-300">
        <img class="rounded-full m-8" height="100px" width="100px"
            src="https://demo.omexer.com/main/wp-content/uploads/sites/3/2022/11/OIP-1-150x150.jpg" alt="">
        <div>
            <h4 class="text-xl">Hello</h4>
            <h1 class="text-2xl">name</h1>
        </div>
    </section>
    <section class="px-0 xs:px-2 sm:px-6 lg:px-20 lg:flex">
        <ul class="lg:w-[20%] w-full border-r border-slate-300 py-8 text-lg font-medium">
            <li class="py-2 cursor-pointer my-1 rounded-l-md bg-orange-500 text-white"><i class="uil text-xl uil-dashboard mx-2"></i>Dashboard</li>
            <li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil text-xl uil-user mx-2"></i>My Profile</li>
            <li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil text-xl uil-graduation-cap mx-2"></i>Enrolled Courses</li>

            <li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil text-xl uil-star mx-2"></i>Reviews</li>
            <li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil text-xl uil-shield-question mx-2"></i>My Quiz</li>

            <li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil text-xl uil-question mx-2"></i>Question & Answer</li>
            <hr>
            <a href="../../apis/logout.php"><li class="py-2 cursor-pointer my-1 rounded-l-md hover:bg-orange-200"><i class="uil uil-signout text-xl mx-2"></i>Logout</li></a>
        </ul>
        <div id="dashboard" class="py-6 lg:p-6 lg:w-[80%] w-full aso">
            <h1 class="text-2xl font-bold">Dashboard</h1>
            <a href="../../video.php?joybanglacourseidxyz=something&somethign=something"> <div class="grid lg:grid-cols-3 gap-4 my-8">
                <div class="p-6 border border-slate-300 rounded-lg text-center">
                    <div
                        class="rounded-full h-16 w-16 mx-auto text-orange-500 bg-orange-50 flex justify-center items-center">
                        <i class="uil uil-book-open text-2xl"></i>
                    </div>
                    <h4 class="text-3xl font-bold my-2">1</h4>
                    <p>Enrolled Courses</p>
                </div>
                <div class="p-6 border border-slate-300 rounded-lg text-center">
                    <div
                        class="rounded-full mx-auto h-16 w-16 text-orange-500 bg-orange-50 flex justify-center items-center">
                        <i class="uil uil-graduation-cap text-2xl"></i>
                    </div>
                    <h4 class="text-3xl font-bold my-2">1</h4>
                    <p>Active Courses</p>
                </div>
                <div class="p-6 border border-slate-300 rounded-lg text-center">
                    <div
                        class="rounded-full mx-auto h-16 w-16 text-orange-500 bg-orange-50 flex justify-center items-center">
                        <i class="uil uil-trophy text-2xl"></i>
                    </div>
                    <h4 class="text-3xl font-bold my-2">0</h4>
                    <p>Completed Courses</p>
                </div>
            </div>
</a>
            <h1 class="text-2xl font-bold">In Progress Courses</h1>
            <a href="../../video.php?joybanglacourseidxyz=something&somethign=something"> <div class="my-8">
                <div class="my-4 border border-slate-300 rounded-lg lg:flex items-center justify-between">
                    <img class="lg:w-[35%]"
                        src="https://th.bing.com/th/id/OIP.VhwWArRuUxrxhl6LzuFKFQHaEK?pid=ImgDet&rs=1" alt="">
                    <div class="lg:w-[65%] p-6">
                        <p><span class="text-orange-400 text-lg mx-2">
                                <i class="uis uis-star"></i><i class="uis uis-star"></i><i class="uis uis-star"></i>
                                <i class="uis uis-star"></i><i class="uil uil-star"></i>
                            </span>4.5</p>
                        <h1 class="text-xl font-semibold my-2">Lorem ipsum dolor, sit amet consectetur adipisicing</h1>
                        <h5>Completed Lessons : <strong>8 of 10 lessons</strong></h5>
                        <div class="flex items-center">
                            <div class="w-full h-1 bg-orange-200 rounded-full">
                                <div class="w-[20%] h-1 bg-orange-400 rounded-full"></div>
                            </div>
                            <p class="ml-4"><strong class="mx-2">80%</strong>Complete</p>
                        </div>
                    </div>
                </div>
            </div></a>
        </div>
        <div id="profile" class="lg:p-6 lg:w-[80%] hidden aso">
            <h1 class="text-2xl font-bold">My Profile</h1>
            <div class="flex justify-between lg:justify-start">
                <div class="w-[25%]">
                    <p class="text-lg my-4 font-medium">Registration Date</p>
                    <p class="text-lg my-4 font-medium">First Name</p>
                    <p class="text-lg my-4 font-medium">Last Name</p>
                    <p class="text-lg my-4 font-medium">Username</p>
                    <p class="text-lg my-4 font-medium">Email</p>
                    <p class="text-lg my-4 font-medium">Phone Number</p>
                    <p class="text-lg my-4 font-medium">Skill/Occupation</p>
                    <p class="text-lg my-4 font-medium">Biography</p>
                </div>
                <div>
                    <p class="text-lg my-4 font-semibold">June 10, 2022 10:10 pm</p>
                    <p class="text-lg my-4 font-semibold">MR.</p>
                    <p class="text-lg my-4 font-semibold">Bangladesh</p>
                    <p class="text-lg my-4 font-semibold">admin</p>
                    <p class="text-lg my-4 font-semibold">admin@admin.com</p>
                    <p class="text-lg my-4 font-semibold">01792932818</p>
                    <p class="text-lg my-4 font-semibold">Mobile apps Publisher</p>
                    <p class="text-lg my-4 font-semibold">We are not hacker</p>
                </div>
            </div>
        </div>
        <div id="enrolled" class="lg:p-6 lg:w-[80%] hidden aso">
            <h1 class="text-2xl font-bold">Enrolled Courses</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:grid-cols-3 my-8">
                <div class="rounded-xl overflow-hidden border border-slate-300">
                    <a href="../../video.php?joybanglacourseidxyz=something&somethign=something"><img
                            loading="lazy" class="w-full"
                            src="https://th.bing.com/th/id/OIP.VhwWArRuUxrxhl6LzuFKFQHaEK?pid=ImgDet&rs=1"
                            alt="Basic photography"></a>
                    <div class="p-4">
                        <div class="flex text-lg">
                            <span class="text-orange-400">
                                <i class="uis uis-star"></i><i class="uis uis-star"></i><i class="uis uis-star"></i>
                                <i class="uis uis-star"></i><i class="uil uil-star"></i>
                            </span>
                            <h4 class="mx-4 font-semibold">4.5</h4>
                            <p class="text-slate-600 font-medium">(114)</p>
                        </div>
                        <a href="../../video.php?joybanglacourseidxyz=something&somethign=something">
                            <h1 class="font-bold text-xl mt-3 mb-8 hover:text-orange-500">Basic photography</h1>
                        </a>
                        <div>
                            <h1 class="flex justify-between font-medium my-2">
                                <p>0/10</p>
                                <p>0% Complete</p>
                            </h1>
                            <div class="w-full h-1 bg-slate-200 rounded-full">
                                <div class="w-[70%] h-1 bg-orange-400 rounded-full"></div>
                            </div>
                        </div>
                        <a href="../../video.php?courseid=somthing&joybanglacourseidxyz=fuck&coursename=something"
                            class="border border-orange-500 rounded-lg text-lg font-semibold mt-4 flex items-center justify-center text-orange-500 py-2 hover:bg-orange-500 hover:text-white">
                            Start Learning</a>
                    </div>
                </div>
                <!-- <div class="rounded-xl overflow-hidden border border-slate-300">
                    <a href="./course.php?courseid=somthing&amp;joybanglacourseidxyz=Mw==&amp;coursename=something"><img
                            loading="lazy" class="w-full"
                            src="https://th.bing.com/th/id/R.b695ec6c406ee257c3da38626c63d55d?rik=LmhrfS4weqpqYg&amp;pid=ImgRaw&amp;r=0"
                            alt="Basic photography"></a>
                    <div class="p-4">
                        <div class="flex text-lg">
                            <span class="text-orange-400">
                                <i class="uis uis-star"></i><i class="uis uis-star"></i><i class="uis uis-star"></i>
                                <i class="uis uis-star"></i><i class="uil uil-star"></i>
                            </span>
                            <h4 class="mx-4 font-semibold">4.5</h4>
                            <p class="text-slate-600 font-medium">(114)</p>
                        </div>
                        <a href="./course.php?joybanglacourseidxyz=Mw==">
                            <h1 class="font-bold text-xl mt-3 mb-8 hover:text-orange-500">Basic photography</h1>
                        </a>
                        <div>
                            <h1 class="flex justify-between font-medium my-2">
                                <p>0/10</p>
                                <p>0% Complete</p>
                            </h1>
                            <div class="w-full h-1 bg-slate-200 rounded-full">
                                <div class="w-[70%] h-1 bg-orange-400 rounded-full"></div>
                            </div>
                        </div>
                        <a href=""
                            class="border border-orange-500 rounded-lg text-lg font-semibold mt-4 flex items-center justify-center text-orange-500 py-2 hover:bg-orange-500 hover:text-white">
                            Start Learning</a>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <script>
        const classList = document.querySelectorAll(".my-1");
        const aso = document.querySelectorAll(".aso");

classList.forEach(button => {
  button.addEventListener("click", function() {
    classList.forEach(btn => {
      btn.classList.remove("bg-orange-500");
      btn.classList.remove("text-white");
      btn.classList.add("hover:bg-orange-200");
    });
    aso.forEach(div => {
      div.classList.add("hidden");
    });
    this.classList.add("bg-orange-500");
    this.classList.add("text-white");
    this.classList.remove("hover:bg-orange-200");
    this.textContent === "Dashboard"
      ? document.getElementById("dashboard").classList.remove("hidden")
      : this.textContent === "My Profile"
      ? document.getElementById("profile").classList.remove("hidden")
      : this.textContent === "Enrolled Courses"
      ? document.getElementById("enrolled").classList.remove("hidden")
      : this.textContent === "Reviews"
      ? document.getElementById("reviews").classList.remove("hidden")
      : this.textContent === "My Quiz"
      ? document.getElementById("quiz").classList.remove("hidden")
      : this.textContent === "Question & Answer"
      ? document.getElementById("qna").classList.remove("hidden")
      : null;
  });
});
    </script>
</body>

</html>