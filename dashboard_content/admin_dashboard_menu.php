<!-- Sidebar Start  -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<div class="col-md-2 pl-0">
    <div class="side-menu">
        <nav>
            <ul>
                <li class="text-center"><a href="admin_view_customer_post.php">View Customer Post</a></li>
                <li class="text-center"><a href="admin_view_donor_post.php">View Donor Post</a></li>
                <li class="text-center"><a href="admin_view_message.php">View Messages</a></li>
                <!-- logout  -->
                <li class="text-center bg-danger mt-5"><a href="includes/logout.php">Logout</a></li>

            </ul>
        </nav>
    </div>
</div>

<!-- Sidebar End  -->