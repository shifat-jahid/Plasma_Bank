<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once "includes/db.php";

$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO contact_us(email,message) 
    VALUES('$email','$message')";
mysqli_query($conn, $query);

$_SESSION['success'] = "Done";
header("location:contact_us.php");
