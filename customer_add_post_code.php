<?php
if (!isset($_SESSION)) {
    session_start();
}
$user_id = $_POST['customer_id'];
$hospital_name = $_POST['hospital_name'];
$date = $_POST['date'];
$phone = $_POST['phone'];
$blood_group = $_POST['blood_group'];
$location = $_POST['location'];
$post = $_POST['post'];


require "includes/db.php";
$query = "INSERT INTO post(user_id,hospital_name,date,phone,blood_group,address,post) 
    VALUES('$user_id','$hospital_name','$date','$phone','$blood_group','$location','$post')";
mysqli_query($conn, $query);

$_SESSION['success'] = "Done";
header("location:customer_add_post.php");
