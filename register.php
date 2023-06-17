<?php 
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register your account</title>
</head>
<body>
    
</body>
</html>


<?php
if(isset($POST['register'])){
    $name = $POST['name'];
    $email = $POST['email'];
    $password= $POST['password'];
    $cno = $POST['cno'];
    $query = "INSERT INTO `user`( `name`, `email`, `password`, `citizenship_no`)
     VALUES ('$name','$email','$password','$cno')";
     $run = mysqli_query($conn, $query);

     echo "<script> alert('You have registered successfully to Smart Municipality')</script>";

}

?>