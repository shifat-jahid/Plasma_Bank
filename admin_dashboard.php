<!-- Header Start -->
<?php
require "includes/header.php";
?>
<!-- Header End -->

<?php
require "dashboard_content/admin_dashboard_header.php";
require_once "includes/db.php";
$query1 = "SELECT * FROM `post`";
$result1 = mysqli_query($conn, $query1);
$total_post = mysqli_num_rows($result1);

$query2 = "SELECT * FROM `register` WHERE user_type = 'Customer'";
$result2 = mysqli_query($conn, $query2);
$total_customer = mysqli_num_rows($result2);

$query3 = "SELECT * FROM `register` WHERE user_type = 'Donor'";
$result3 = mysqli_query($conn, $query3);
$total_donor = mysqli_num_rows($result3);
?>

<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/admin_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-4">
            <div class="dashboard-content pt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Post</h5>
                                <h2><?= $total_post ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Customer</h5>
                                <h2><?= $total_customer ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Donor</h5>
                                <h2><?= $total_donor ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->