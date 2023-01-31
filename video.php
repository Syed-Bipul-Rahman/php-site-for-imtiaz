<?php

include './nav.php';



?>
<section class="w-full px-0 xs:px-2 sm:px-6 lg:px-20 pt-20 bg-slate-100 text-lg font-medium flex justify-between">
    <P>Complete Trello Beginners to Advanced</P>
    <P>Your Progress: <span class="font-bold">0</span> of <span class="font-bold">10</span> (0%)</P>
    <P class="mb-3"><i class="fa-regular fa-circle-check"></i> Mrak as Complete</P>
</section>
<section class="px-0 xs:px-2 sm:px-6 lg:px-20 my-8 lg:flex lg:justify-between">
    <aside class="lg:w-[30%] w-full">
    <h5 class="my-4 text-lg font-bold mx-1">Course Content</h5>
            <div id="op1" class="rounded-lg border border-slate-400 overflow-hidden my-4 h-14">
                <div id="ro1" onclick="work('ro1')" class="flex border-b border-slate-400 justify-between items-center p-3 font-bold text-lg bg-slate-50 cursor-pointer hover:text-orange-500">
                    <p>Setting up</p>
                    <i id="al1" class="uil uil-angle-right text-orange-500 text-3xl leading-8"></i>
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
            <div id="op2" class="rounded-lg border border-slate-400 overflow-hidden my-4 h-14">
                <div id="ro2" onclick="work('ro2')" class="flex border-b border-slate-400 justify-between items-center p-3 font-bold text-lg bg-slate-50 cursor-pointer hover:text-orange-500">
                    <p>Setting up</p>
                    <i id="al2" class="uil uil-angle-right text-orange-500 text-3xl leading-8"></i>
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
        
    </aside>
    <div class="lg:w-2/3">
    <iframe class="rounded-2xl w-full" src="https://www.youtube.com/embed/XHOmBV4js_E" allowfullscreen height="450px" frameborder="0"></iframe>
        <div class="flex justify-center mt-6">
            <div class="px-4 py-2 border border-slate-400 mx-2 cursor-pointer"><i class="fa-solid fa-arrow-left"></i> Previous</div>
            <div class="px-4 py-2 border border-slate-400 mx-2 cursor-pointer">Next <i class="fa-solid fa-arrow-right"></i></div>
        </div>
    </div>

</section>
<?php

include './footer.php';



?>
</body>

</html>