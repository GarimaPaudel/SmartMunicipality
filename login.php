<?php 
session_start();
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-blue-100" >
    <div>
        <p class=" flex justify-center text-center text-red-200 text-2xl bg-blue-950">Smart Municipality</p>
    </div>
    <div class=" mt-20 ">
        <p class="text-center text-red-600 text-4xl font-serif font-semibold " >Log In to Smart Municipality</p>
    </div>
    <div class=" flex justify-center  basis-5/12 ">
        <form action="" method="post" class=" bg-white shadow-2xl rounded-lg mt-24 h-96 w-1/4" >
            <div class="flex flex-col justify-center items-center">
            <input type="email" name="email" id="mail" placeholder="Email" class="h-14 w-72 rounded-md mt-14 border-gray-400 border-2"> <br> <br>
            <input type="password" name="pass" id="pass" placeholder="Password" class="h-14 w-72 rounded-md border-gray-400 border-2">  </div> <br> <br>
            <div class=" flex items-center justify-center ">
                <button class="bg-red-500 text-white font-semibold text-xl h-14 w-52 rounded-md hover:bg-red-600 items-center mx-auto " >Log In</button>
                 </div>
        </form>
    </div>
</body>
</html>

<?php


?>