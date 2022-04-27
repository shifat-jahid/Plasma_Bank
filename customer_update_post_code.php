<?php
    if (!isset($_SESSION)) {
        session_start();
    }
    $post_id = $_POST['post_id'];
    $date = $_POST['date'];
    $hospital = $_POST['hospital'];
    $phone = $_POST['phone'];
    $blood_group = $_POST['blood_group'];
    $location = $_POST['location'];
    $post = $_POST['post'];


    require "includes/db.php";
    $query = "UPDATE post 
    SET date='$date',hospital_name='$hospital',phone='$phone',blood_group='$blood_group', address='$location',post='$post'
    WHERE post_id = $post_id";
    mysqli_query($conn,$query);
    $_SESSION['success'] = "Updated";
    header("location:customer_manage_post.php");
?>