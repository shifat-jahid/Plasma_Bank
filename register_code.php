<?php
if (!isset($_SESSION)) {
    session_start();
}
//Getting data from register_page.php
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nid = $_POST['nid'];
$user_type = $_POST['user_type'];
$blood_group = $_POST['blood_group'];
$password = $_POST['password'];
$location = $_POST['location'];
//check if any field is empty


//check if all field is empty or not
if (empty($username)) {
    $_SESSION['error'] = "Please Enter Username";
    header("location:register_page.php");
} else if (empty($email)) {
    $_SESSION['error'] = "Please Enter Email";
    header("location:register_page.php");
} else if (empty($phone)) {
    $_SESSION['error'] = "Please Enter Phone";
    header("location:register_page.php");
} else if (empty($user_type)) {
    $_SESSION['error'] = "Please Enter User Type";
    header("location:register_page.php");
} else if (empty($blood_group)) {
    $_SESSION['error'] = "Please Enter Blood Group";
    header("location:register_page.php");
} else if (empty($password)) {
    $_SESSION['error'] = "Please Enter Password";
    header("location:register_page.php");
} else if (empty($location)) {
    $_SESSION['error'] = "Please Enter Location";
    header("location:register_page.php");
}
//Database Part
else {

    require "includes/db.php";
    $select_query = "SELECT * FROM register WHERE email = '$email' OR username = '$username'";
    $result = mysqli_query($conn, $select_query);

    //Check if there is more than 1 user
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['exist'] = "Already Registered.Try Again";
        header("location:register_page.php");
    } else {
        $query = "INSERT INTO register(username,email,phone,nid,user_type,blood_group,password,address) 
        VALUES('$username','$email','$phone','$nid','$user_type','$blood_group','$password','$location')";
        mysqli_query($conn, $query);
        $_SESSION['success'] = "Registration Successful";
        header("location:register_page.php");
    }
}
