<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/28381dd01b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/solid.css">
    <link rel="stylesheet" href="../style.css">
    <title>post something</title>
</head>

<body style="font-family: 'Rajdhani', sans-serif;" class="mx-20">

    <h4 class="font-bold text-2xl">কিছু পোস্ট করবি </h4>
    <form class="grid gap-4 grid-cols-2 w-full" method="post" action="./blog-psot.php">
        <div class="lg:col-span-1 col-span-2">
            <label class="font-bold text-xl" for="name">ছবিটা কি তোর নানায় দিবে? :</label><br>
            <input class="my-2 border border-gray-300 w-full h-10 rounded-md px-4 text-lg font-semibold" type=""
                name="imgurlman" id="">
        </div>

        <div class="col-span-2">
            <label class="font-bold text-xl" for="Website">পোস্ট এর টাইটেল কি হবে :</label><br>
            <input class="my-2 w-full border border-gray-300 h-10 rounded-md px-4 text-lg font-semibold" type="text"
                name="titlekihobe" id="">
        </div>
        <div class="col-span-2">
            <label class="font-bold text-xl" for="Comment">এখন বিস্তারিত লিখতে থাক , ঘটনা কি :</label><br>
            <textarea class="my-2 w-full rounded-md border border-gray-300 px-4 text-lg font-semibold" name="detalisbolovai"
                id="" rows="7"></textarea>
        </div>
        <div class="col-span-2 flex justify-start items-center"><button
                class="uppercase py-3 px-8 bg-orange-600 hover:bg-blue-900 text-white font-bold rounded-md transition-all duration-300"
                type="submit">চাপ দিয়ে পোস্ট কর </button></div>

    </form>