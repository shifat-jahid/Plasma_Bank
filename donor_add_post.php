<!-- Header Start -->
<?php
if (!isset($_SESSION)) {
    session_start();
}
$active = $_SESSION['username'];
require "includes/header.php";
require "dashboard_content/donor_dashboard_header.php";
?>
<!-- Header End -->
<div class="container_fluid">
    <div class="row">
        <?php
        require "dashboard_content/donor_dashboard_menu.php";
        require_once "includes/db.php";
        $query = "SELECT id FROM register WHERE username = '$active'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $active_id = $row['id'];
        ?>

        <div class="col-md-8 p-5">
            <div class="dashboard-content pt-2">
                <?php
                    require "includes/success.php";
                ?>
                <form action="donor_add_post_code.php" method="post">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="donor_id" value="<?php echo $active_id ?>">
                    </div>
                    <div class="form-group">
                        <label>Last Donated</label>
                        <input type="date" class="form-control" name="date">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <!-- Blood Group  -->
                    <div class="form-group">
                        <label>Blood Group</label>
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
                    <div class="form-group">
                        <label>Location</label>
                        <textarea class="form-control" rows="3" name="location"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Write Your Post</label>
                        <textarea class="form-control" rows="3" name="post"></textarea>
                    </div>

                    <button type="submit" class="btn button primary_color px-5" name="post">Post</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->