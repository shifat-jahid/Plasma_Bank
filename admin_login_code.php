<?php
if (!isset($_SESSION)) {
    session_start();
}

$username = $_POST['username'];
$password = $_POST['password'];

//check if all field is empty or not
if (empty($username)) {
    $_SESSION['error'] = "Please Enter Username!!";
    header("location:admin_login_page.php");
} 
else if (empty($password)) {
    $_SESSION['error'] = "Please Enter Password";
    header("location:admin_login_page.php");
}else{

    require "includes/db.php";
    $query = "SELECT * FROM `admin` WHERE  username = '$username' AND Pass = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("location:admin_dashboard.php");
    } else {
        $_SESSION['error'] = "Wrong Email or Password!";
        header("location:admin_login_page.php");
    }
}
