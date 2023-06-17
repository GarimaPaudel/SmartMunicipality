<?php 
session_start();
include('db.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log In</title>
</head>
<body class="bg-blue-100" >
    <div>
        <p class=" flex justify-center text-center text-red-200 text-2xl bg-blue-950">Smart Municipality</p>
    </div>
    <div class=" mt-28 ">
        <p class="text-center text-blue-600 text-4xl font-serif font-semibold " >Log In to Smart Municipality</p>
    </div>
    <div class=" flex justify-center  basis-4/12 ">
        <form action="" method="post" class=" bg-white shadow-2xl rounded-lg mt-24 h-96 w-3/6" >
            <div class="flex flex-col justify-center items-center">
            <input type="email" name="email" id="mail" placeholder="Email" class="h-14 w-80 rounded-md mt-14 border-gray-400 border-2"> <br> <br>
            <input type="password" name="pass" id="pass" placeholder="Password" class="h-14 w-80 rounded-md border-gray-400 border-2">  </div> <br> <br>
            <div class=" flex items-center justify-center ">
                <input type="text" name="login" value="Log In" class="bg-lime-600 text-white text-center font-semibold text-xl h-14 w-52 rounded-md hover:bg-lime-700 items-center mx-auto " >
                
             </div>
             <div class="flex justify-center items-center text-xl text-blue-950 m-3">
                <a href="register.php"> Don't have an account? Register...</a>
             </div>
             
        
        </form>
    </div>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "SELECT * from users WHERE email = '$email' and password = '$password'";
    $run = mysqli_query($conn,$query);
    $count = mysqli_num_rows($run);
    if($count === 1){
        echo"<script>alert('You are logged in')</script>";
        echo "<script>window.open('index.php')</script>";

    }
}

?>