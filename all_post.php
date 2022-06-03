<!-- Header Start -->
<?php
require "includes/header.php";
require "includes/db.php";



//Database Query
$query = "SELECT r.id,r.username,r.email,r.user_type,p.post_id,p.hospital_name,p.date,p.phone,p.blood_group,p.address,p.post
        FROM `post` as p  
        JOIN register as r
        ON p.user_id = r.id
        ";
$result = mysqli_query($conn, $query);
?>
<!-- Header End -->

<!-- Menu Start -->
<?php require "includes/home_menu.php" ?>
<!-- Menu End -->

<div class="container">
    <div class="section-header text-center py-4">
        <h1>All Post</h1>
    </div>

    <!-- Search Start  -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-4">
            <form method="post" action="all_post_search_result.php">
                <div class="form-group">
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
                <button type="submit" class="btn btn-primary text-center">Search</button>
            </form>
        </div>
    </div>
    <!-- Search End  -->

    <div class="row">
        <!-- Fetching all post by the active user Start  -->
        <?php
        foreach ($result as $data) :
        ?>
            <div class="col-md-4">
                <div class="single_post h-100 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Post ID: <?= $data['post_id'] ?></h5>
                            <h6 class="card-title">Username: <?= $data['username'] ?></h6>
                            <p class="card-subtitle mb-2 text-muted">Email: <?= $data['email'] ?> </p>
                            <p class="card-subtitle mb-2 text-muted">UserID: <?= $data['id'] ?> </p>
                            <p class="card-subtitle mb-2 text-muted">Date: <?= $data['date'] ?> </p>
                            <p class="card-subtitle mb-2 text-muted">User Type: <?= $data['user_type'] ?> </p>
                            <p class="card-text mb-1"><span>Blood Group: </span><?= $data['blood_group'] ?></p>
                            <p class="card-text mb-1"><span>Phone: </span> <?= $data['phone'] ?></p>
                            <p class="card-text mb-1"><span>Location: </span> <?= $data['address'] ?></p>
                            <p class="card-text mt-3 mb-3"><span>Post Details: </span> <?= $data['post'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>



    <!-- footer start  -->
    <?php
    require "includes/footer.php";
    ?>
    <!-- footer end  -->