<!-- Header Start -->
<?php

if (!isset($_SESSION)) {
    session_start();
}

require "includes/header.php";
require "dashboard_content/donor_dashboard_header.php";

//Database Query
$active = $_SESSION['username'];
require_once "includes/db.php";
//Getting active user id
$query2 = "SELECT * FROM `register` WHERE `username` = '$active'";
$result2 = mysqli_query($conn, $query2);
$result2 = mysqli_fetch_assoc($result2);
$active_id = $result2['id'];

//Read Post
$query = "SELECT * FROM `post` WHERE `user_id`= '$active_id'";
$result = mysqli_query($conn, $query);
?>
<!-- Header End -->

<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/donor_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-4">
            <div class="section-header mb-5">
                <h1>My Post</h1>
            </div>
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
                                        <h6 class="card-subtitle mb-2 text-muted">Username: <?= $active ?> </h6>
                                        <h6 class="card-subtitle mb-4 text-muted">Date: <?= $single_data['date'] ?> </h6>
                                        <p class="card-text mb-2"><span>Blood Group: </span><?= $single_data['blood_group'] ?></p>
                                        <p class="card-text mb-2"><span>Phone: </span> <?= $single_data['phone'] ?></p>
                                        <p class="card-text mb-2"><span>Location: </span> <?= $single_data['address'] ?></p>
                                        <p class="card-text mt-4 mb-3"><span>Post Details: </span> <?= $single_data['post'] ?></p>


                                        <!-- Update & Delete  -->
                                        <a class="btn primary_color text-white" href="donor_update_post.php?id=<?= $single_data['post_id'] ?>">
                                            Update
                                        </a>
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
                                                        <a class="btn btn-danger" href="donor_delete_post.php?id=<?= $single_data['post_id'] ?>">
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
</div>

<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->