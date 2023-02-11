<?php
// session_start();

include './nav.php';
if (isset($_GET['ocuourse'])) {


    $buycourseid = base64_decode(urldecode($_GET['ocuourse']));

    $_SESSION['xcartcoursex'] = $buycourseid;
} elseif (isset($_SESSION['xcartcoursex'])) {
    $buycourseid = $_SESSION['xcartcoursex'];
}


?>
    <section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 lg:flex lg:justify-between">
        <div class="lg:w-2/3 flex flex-col">
            <table>
                <thead class="bg-slate-100">
                    <tr class="text-center font-bold text-xl">
                        <td class="p-2"></td>
                        <td class="p-2">Image</td>
                        <td class="p-2">Product</td>
                        <td class="p-2">Price</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['xcartcoursex'])) {
                        include './apis/connection.php';

                        $sql = "SELECT `img`,`price`,`title` FROM `new_course` WHERE `course_number`=$buycourseid";

                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                                ?>



                            <tr class="h-20 border-b border-slate-400 text-center text-lg">
                                <td><i class="uil uil-times text-red-700 text-xl cursor-pointer"></i></td>
                                <td class="flex justify-center my-2"><img loading="lazy" class="h-16 m-0" src="<?php echo $row['img'] ?>" alt="<?php echo $row['title'] ?>">
                                </td>
                                <td><?php echo $row['title'] ?></td>
                                <td>৳ <?php echo $row['price'] ?></td>
                            </tr>



                </tbody>
            </table>
            <div class="flex my-4">
                <input class="mx-4 p-2  border border-slate-400 rounded-sm font-medium" type="text" name="" id="" placeholder="Coupon code">
                <button class="py-4 px-6 bg-orange-500 text-white hover:bg-blue-900 font-bold rounded-sm">APPLY
                    COUPON</button>
            </div>
        </div>

        <div class="lg:w-[30%] w-full">
            <h2 class="text-2xl font-bold mb-4">Cart Totals</h2>
            <div class="rounded-md border border-slate-400">
                <div class="grid grid-cols-2 border-b border-slate-400 items-center text-center text-lg p-4">
                    <p>Subtotal</p>
                    <p class="font-bold">৳ <?php echo $row['price'] ?></p>
                </div>
                <div class="grid grid-cols-2 border-b border-slate-400 items-center text-center text-lg p-4">
                    <p>Coupon</p>
                    <p class="font-bold">-$0.00</p>
                </div>
                <div class="grid grid-cols-2 border-b border-slate-400 items-center text-center text-lg p-4">
                    <p>Total</p>
                    <p class="font-bold">৳ <?php echo $row['price'] ?></p>
                </div>
            </div>

    <?php

                                //echo "id: " . $row["nofcourse"]. " - Name: " . $row["course_catagory"]. " " . $row["course_title"]. $row["page_link"]. "<br>";
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
    <a href="./possiblecheckout.php"><button class="py-4 px-6 bg-orange-500 text-white hover:bg-blue-900 font-bold rounded-md w-full my-2">PROCEED TO
            CHECKOUT</button></a>
        </div>
    </section>

   <?php

                    } else {
                        echo "No course in cart";
                    }

include './footer.php';



?>
</body>

</html>