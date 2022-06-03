<?php
if (!isset($_SESSION)) {
    session_start();
}
$id = $_POST['id'];
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nid = $_POST['nid'];
$blood_group = $_POST['blood_group'];
$address = $_POST['location'];

require 'includes/db.php';
$query = "UPDATE register
    SET username ='$username', email ='$email', phone ='$phone',nid ='$nid',blood_group ='$blood_group',address='$address'
    WHERE id = '$id'";
mysqli_query($conn, $query);
$_SESSION['success']  = "Updated Successfully";
$_SESSION['username']  = $username;
header("location:customer_dashboard_update_form.php");
?>