<!-- Header Start -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
require "includes/header.php";
?>
<!-- Header End -->

<?php
require "dashboard_content/customer_dashboard_header.php";
?>
<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/customer_dashboard_menu.php";
        ?>
        <div class="col-md-8 p-5">
            <div class="dashboard-content">
                <div class="reg-form pt-2">
                    <h2 class="mb-4">Update Profile</h2>
                    <?php
                    require "includes/success.php";
                    ?>
                    <?php
                    require 'includes/db.php';
                    $active = $_SESSION['username'];
                    $query = "SELECT * FROM `register` WHERE `username` = '$active'";
                    $result = mysqli_query($conn, $query) or die('Query Unsuccessful');
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <form action="customer_dashboard_update_code.php" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>">
                                    <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" name="email" value="<?php echo $row['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="<?php echo $row['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>NID</label>
                                    <input type="text" class="form-control" name="nid" value="<?php echo $row['nid'] ?>">
                                </div>
                                <!-- Blood Group  -->
                                <div class="form-group">
                                    <label>Blood Group</label>
                                    <select class="form-control" name="blood_group">
                                        <option hidden><?php echo $row['blood_group'] ?></option>
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
                                    <label>Address</label>
                                    <textarea class="form-control" rows="3" name="location"><?=$row['address'] ?></textarea>
                                </div>

                                <button type="submit" class="btn btn-success px-5">Update</button>
                            </form>
                    <?php
                        }
                    }
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