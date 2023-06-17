<?php
session_start();
session_unset();
session_destry();
header("Location:index.php");
echo "<script> alert('You have been logged out')</script>";
?>