<?php

	require "./includes/home_menu.php" ;
    require "includes/header.php";
    require "includes/db.php";
	
    
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];

   
    $query = "SELECT * FROM `admin` WHERE  Email = '$email' AND Pass = '$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;

        header("location:Admin.php");
    } else {
        $_SESSION['error'] = "Wrong Email or Password!";
        header("location:admin_login_page.php");
    }
    ?>

