<?php
if (!isset($_SESSION)) {
    session_start();
}
require_once "includes/db.php";


$user_id = $_POST['donor_id'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$blood_group = $_POST['blood_group'];
$location = $_POST['location'];
$post = $_POST['post'];

$query = "INSERT INTO post(user_id,date,phone,blood_group,address,post) 
    VALUES('$user_id','$date','$phone','$blood_group','$location','$post')";
mysqli_query($conn, $query);

$_SESSION['success'] = "Done";
header("location:donor_add_post.php");
