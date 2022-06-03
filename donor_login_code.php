<?php
if (!isset($_SESSION)) {
    session_start();
}
//Getting data from donor_login_page.php
$email = $_POST['email'];
$password = $_POST['password'];

//check if all field is empty or not
if (empty($email)) {
    $_SESSION['error'] = "Please Enter Email!!";
    header("location:donor_login_page.php");
} 
else if (empty($password)) {
    $_SESSION['error'] = "Please Enter Password";
    header("location:donor_login_page.php");
} 
else {
    require "includes/db.php";
    $query = "SELECT username,user_type FROM register WHERE user_type='Donor' AND email ='$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $usertype = $row['user_type'];

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;
        header("location:donor_dashboard.php");
    } else {
        $_SESSION['error'] = "Wrong Email or Password!";
        header("location:donor_login_page.php");
    }
}
