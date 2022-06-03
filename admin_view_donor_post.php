<!-- Header Start -->
<?php
require "includes/header.php";
require "includes/db.php";
require "dashboard_content/admin_dashboard_header.php";
//Database Query - Showing all post by Donor Start
$query = "SELECT r.id,r.username,r.email,r.user_type,p.post_id,p.hospital_name,p.date,p.phone,p.blood_group,p.address,p.post
        FROM `post` as p  
        JOIN register as r
        ON p.user_id = r.id
        WHERE r.user_type = 'Donor'
        ";

$result = mysqli_query($conn, $query);
//Database Query - Showing all post by Donor End
?>
<!-- Header End -->

<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/admin_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-4">
            <div class="section-header mb-2">
                <h1>All Post By Donor</h1>
            </div>
            <!-- Search Start  -->
            <form method="post" action="admin_donor_post_search.php">
                <div class="form-group w-50">
                    <select class="form-control" name="blood_group">
                        <option hidden>Select Blood Group</option>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary text-center mb-4">Search</button>
            </form>
            <!-- Search End  -->
            <?php
            require "includes/success.php";
            ?>
            <div class="dashboard-content pt-2">
                <div class="row">
                    <!-- Fetching all post by the active user Start  -->
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
                                        <p class="card-text mb-1"><span>Phone: </span> <?= $single_data['phone'] ?></p>
                                        <p class="card-text mb-1"><span>Location: </span> <?= $single_data['address'] ?></p>
                                        <p class="card-text mt-3 mb-3"><span>Post Details: </span> <?= $single_data['post'] ?></p>

                                        <!-- Modal Trigger Button  -->
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">
                                            Delete
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="delete" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">Do you really want to delete!!! </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                        <a class="btn btn-danger" href="admin_customer_delete_post.php?id=<?= $single_data['post_id'] ?>">
                                                            Delete
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    endforeach;
                    ?>
                    <!-- Fetching all post by the active user End -->
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