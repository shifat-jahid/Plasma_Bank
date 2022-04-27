<!-- Header Start -->
<?php
if (!isset($_SESSION)) {
  session_start();
}
require "includes/header.php";
?>
<!-- Header End -->

<!-- Menu Start -->
<?php require "includes/home_menu.php" ?>
<!-- Menu End -->

<div class="container">
  <div class="section-header text-center py-4">
    <h1>Registration</h1>
  </div>

  <div class="row align-items-center justify-content-center py-4 border border-dark rounded">
    <div class="col-md-8 p-5">

      <?php
      require "includes/success.php";
      require "includes/exist.php";
      require "includes/error.php";
      ?>

      <form action="register_code.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Enter Username" name="username">
        </div>
        <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control" placeholder="Enter Email" name="email">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" class="form-control" placeholder="Enter Phone No." name="phone">
        </div>
        <div class="form-group">
          <label>NID</label>
          <input type="text" class="form-control" placeholder="Enter NID" name="nid">
        </div>
        <!-- User Type  -->
        <div class="form-group">
          <label>User Type</label>
          <select class="form-control" name="user_type">
            <option hidden>Select Type</option>
            <option>Customer</option>
            <option>Donor</option>
          </select>
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
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter Password" name="password">
        </div>

        <div class="form-group">
          <label>Address</label>
          <textarea class="form-control" rows="3" name="location">
          </textarea>
        </div>

        <button type="submit" class="btn btn-danger px-5">Sign Up</button>
      </form>
    </div>
  </div>
</div>




<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->