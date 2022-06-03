<!-- Dashboard Header Start -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<div class="py-5 text-white primary_color">
    <div class="row justify-content-around align-items-center">
        <div class="dashboard-logo">
            <h4> <a href="customer_dashboard.php">Customer Dashboard</a></h4>
        </div>
        <div class=<?php if (isset($_SESSION['username'])) echo "username" ?>>
            <p>Username:
                <span>
                    <?php
                    if (isset($_SESSION['username']))
                        echo $_SESSION['username']
                    ?>
                </span>
            </p>
        </div>
    </div>
</div>

<!-- Dashboard Header End -->