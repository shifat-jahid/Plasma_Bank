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
                <li class="text-center"><a href="customer_add_post.php">Add Post</a></li>
                <li class="text-center"><a href="customer_manage_post.php">Manage Post</a></li>
                <li class="text-center"><a href="customer_view_donor_post.php">View Donor Post</a></li>
                <li class="text-center"><a href="customer_dashboard_update_form.php">Update Profile</a></li>
                <!-- logout  -->
                <li class="text-center bg-danger mt-5"><a href="includes/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
</div>

<!-- Sidebar End  -->