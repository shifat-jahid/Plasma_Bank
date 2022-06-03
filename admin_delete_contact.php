<?php 
if (!isset($_SESSION)) {
    session_start();
}
$id = $_GET['id'];
require "includes/db.php";
$query = "DELETE FROM contact_us WHERE id = $id";
mysqli_query($conn,$query);
$_SESSION['success'] = 'Post Deleted!';
header("location:admin_view_message.php");
?>



