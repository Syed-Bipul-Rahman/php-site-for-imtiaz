<?php
include 'nav.php';
?>

<section class="px-0 xs:px-2 sm:px-6 lg:px-20 py-20 flex justify-center">
    <div style="box-shadow: 3px 2px 19px #7e7979;" class="xs:p-4 sm:p-6 md:p-8 lg:p-12 lg:w-2/5 rounded-xl">
        <h1 class="text-3xl font-bold my-6">Enter your transaction details</h1>
        <form action="" method="post">
            <input class="w-full border border-slate-400 h-12 p-2 my-2 rounded-md" type="text" name="number" id=""
                placeholder="Phone number">
            <input class="w-full border border-slate-400 h-12 p-2 my-2 rounded-md" type="email" name="email" id=""
                placeholder="Email">
            <input class="w-full border border-slate-400 h-12 p-2 my-2 rounded-md" type="text" name="tx-id" id=""
                placeholder="Trx id">
            <select class="w-full border border-slate-400 h-12 p-2 my-2 rounded-md" name="getway" id="">
                <option value="0">Select Payment Method</option>
                <option value="1">BKash</option>
                <option value="2">Nagad</option>
                <option value="3">Rocket</option>
            </select>
            <input type="submit" name="sub" value="Sign in"
                class="w-full cursor-pointer py-2 bg-orange-500 text-white rounded-md font-bold text-center text-lg uppercase" />

        </form>
    </div>

</section>

<?php 
$ip = $_SERVER['REMOTE_ADDR'];
include './apis/connection.php';
if (isset($_POST['sub'])) {
    $number = $_POST['number'];
    $email = $_POST['email'];
    $userid = rand(1, 6);
    $getway = $_POST['getway']; 
    $txid = $_POST['tx-id'];
    if($number == "" || $email == "" || $getway == "0" || $txid == ""){
        echo "<script>alert('Please fill up all the fields.')</script>";
        exit();
    }
    // INSERT INTO `transaction` (`serial`, `phone`, `email`, `gateway`, `transaction_id`, `user_id`, `ip`, `time`) VALUES (NULL, '8801792588', 'this@mail.com', '5', 'trx1225dfdf', '5', '86.4513.85.651', current_timestamp());

    $usermsg = "INSERT INTO `transaction` (`serial`, `phone`, `email`, `gateway`, `transaction_id`, `user_id`, `ip`, `time`) VALUES (NULL, '$number', '$email', '$getway', '$txid','$userid', '$ip', current_timestamp());";
    $result = $conn->query($usermsg);
    if ($result) {
        echo "<script>alert('Your payment has been sent successfully.')</script>";
    } else {
        echo "<script>alert('Something went wrong.')</script>".mysqli_error($conn);
    }
}

include './footer.php'; 

?>
</body>

</html>