<?php
	require_once "./includes/header.php"; 
	require_once "./includes/home_menu.php"; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    
    <head>


<?php

function db_connect(){
    $conn = mysqli_connect("localhost", "root", "", "plasma");
    if(!$conn){
        echo "Can't connect database " . mysqli_connect_error($conn);
        exit;
    }
    return $conn;
}


?>