<aside class="lg:w-[30%] w-full">
        <div class="shadow-lg w-full p-6 rounded-xl my-6">
            <h3 class="text-xl my-4 font-bold">Recent Posts</h3><?php

                include './apis/connection.php';

                $sql = "SELECT `posotid`,`titletaki`,`imgurlki` FROM `psblogvai`ORDER BY `posotid` DESC LIMIT 3";


                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) { ?>
            <div class="flex items-center my-6">
                


                        <img loading="lazy" class="h-24 w-24 rounded-md" src="<?php echo $row['imgurlki']; ?>" alt="Sohoz-learning, android development">
                        <div class="p-4">
                            <a href="./blog.php?joyposterjoyx=<?php echo base64_encode(urlencode($row['posotid'])); ?>" class="font-bold text-sm mb-3 hover:text-orange-500 transition-all"><?php echo substr($row['titletaki'],0,45); ?></a>
                            <p class="text-xs text-slate-500">April 1, 2021</p>
                        </div>

                
            </div><?php

                    }
                } else {
                    echo 'no recent post';
                } ?>
        </div>
       <!--  <div class="shadow-lg w-full p-6 rounded-xl flex flex-col my-6">
            <h3 class="text-xl my-4 font-bold">Categories</h3>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Business</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Courses</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Education</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Graphics Design</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Programming</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i class="uil uil-angle-right mx-2 text-orange-500"></i>Web Design</a>
        </div>
        <div class="shadow-lg w-full p-6 rounded-xl flex flex-col my-6">
            <h3 class="text-xl my-4 font-bold">Archives</h3>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>April 2021</a>
        </div>
        <div class="shadow-lg w-full p-6 rounded-xl flex flex-col my-6">
            <h3 class="text-xl my-4 font-bold">Categories</h3>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>Register</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>Log in</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>Entries feed</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>Comments feed</a>
            <a class="hover:text-orange-500 my-2 text-slate-500" href=""><i
                    class="uil uil-angle-right mx-2 text-orange-500"></i>WordPress.org</a>
        </div> -->
    </aside>