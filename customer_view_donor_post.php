<!-- Header Start -->
<?php
require "includes/header.php";
require "includes/db.php";
require "dashboard_content/customer_dashboard_header.php";
//Database Query - Showing all post by customer Start
$query = "SELECT r.id,r.username,r.email,r.user_type,p.post_id,p.hospital_name,p.date,p.phone,p.blood_group,p.address,p.post
        FROM `post` as p  
        JOIN register as r
        ON p.user_id = r.id
        WHERE r.user_type = 'Donor'
        ";

$result = mysqli_query($conn, $query);
//Database Query - Showing all post by customer End
?>
<!-- Header End -->

<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/customer_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-4">
            <div class="section-header mb-2">
                <h1>All Post By Donor</h1>
            </div>
            <div>
                <form>
                    <div class="form-group">
                        <input type="search" class="form-control" placeholder="Search Here">
                    </div>
                </form>
            </div>
            <?php
            require "includes/success.php";
            ?>
            <div class="dashboard-content pt-2">
                <div class="row">
                    <?php
                    foreach ($result as $single_data) :
                    ?>
                        <div class="col-md-4">
                            <div class="single-post h-100">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Post ID: <?= $single_data['post_id'] ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted">Username: <?= $single_data['username'] ?> </h6>
                                        <h6 class="card-subtitle mb-2 text-muted">User Type: <?= $single_data['user_type'] ?> </h6>
                                        <h6 class="card-subtitle mb-3 text-muted">Date: <?= $single_data['date'] ?> </h6>
                                        <p class="card-text mb-1"><span>Blood Group: </span><?= $single_data['blood_group'] ?></p>
                                        <p class="card-text mb-1"><span>Hospital: </span><?= $single_data['hospital_name'] ?></p>
                                        <p class="card-text mb-1"><span>Phone: </span> <?= $single_data['phone'] ?></p>
                                        <p class="card-text mb-1"><span>Location: </span> <?= $single_data['address'] ?></p>
                                        <p class="card-text mt-3 mb-3"><span>Post Details: </span> <?= $single_data['post'] ?></p>


                                        <form action="customer_view_donor_post.php" method="post">
                                            <?php
                                            if (isset($_POST['requestBtn'])) {
                                            ?>
                                                <button class="btn btn-success text-white">Requested</button>
                                            <?php
                                            } else {
                                            ?>
                                                <button class="btn btn-dark text-white" name="requestBtn">Send Request</button>
                                            <?php } ?>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
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