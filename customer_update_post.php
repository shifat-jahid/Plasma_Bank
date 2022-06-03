<!-- Header Start -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
require "includes/header.php";
$post_id = $_GET['id'];

require "dashboard_content/customer_dashboard_header.php";
require "includes/db.php";
$query = "SELECT * FROM post WHERE post_id = '$post_id'";
$result = mysqli_query($conn, $query);
?>
<!-- Header End -->
<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/customer_dashboard_menu.php";
        ?>

        <div class="col-md-8 pt-4">
            <div class="dashboard-content p-5">
                <h2 class="mb-4">Update Post</h2>
                <?php
                foreach ($result as $single_data) :
                ?>
                    <form action="customer_update_post_code.php" method="post">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="hidden" class="form-control" name="post_id" value="<?= $single_data['post_id'] ?>">
                            <input type="date" class="form-control" name="date" value="<?= $single_data['date'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Hospital</label>
                            <input type="text" class="form-control" name="hospital" value="<?= $single_data['hospital_name'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?= $single_data['phone'] ?>">
                        </div>
                        <!-- Blood Group  -->
                        <div class="form-group">
                            <label>Blood Group</label>
                            <select class="form-control" name="blood_group">
                                <option hidden><?= $single_data['blood_group'] ?></option>
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
                        <div class="form-group">
                            <label>Location</label>
                            <textarea class="form-control" rows="3" name="location"><?= $single_data['address'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Write Your Post</label>
                            <textarea class="form-control" rows="3" name="post"><?= $single_data['post'] ?></textarea>
                        </div>

                        <button type="submit" class="btn btn-success px-5">Post</button>
                    </form>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->