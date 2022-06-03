<?php 
if (!isset($_SESSION)) {
    session_start();
}
$post_id = $_GET['id'];
require "includes/db.php";
$query = "DELETE FROM post WHERE post_id = $post_id";
mysqli_query($conn,$query);
$_SESSION['success'] = 'Post Deleted!';
header("location:customer_manage_post.php");
?>



