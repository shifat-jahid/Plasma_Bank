<!-- Header Start -->
<?php
require "includes/header.php";
?>
<!-- Header End -->

<!-- Menu Start -->
<?php require "includes/home_menu.php" ?>
<!-- Menu End -->





<div class="container">
    <div class="section-header text-center py-4">
        <h1>Login As Donor</h1>
    </div>

    <div class="row align-items-center justify-content-center py-4 border border-dark rounded">
        <div class="col-md-8 p-5">
            <form>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" placeholder="Enter Password">
                </div>
                <button type="submit" class="btn btn-danger px-5">Login</button>
            </form>
        </div>
    </div>
</div>





<!-- footer start  -->
<?php
require "includes/footer.php";
?>
<!-- footer end  -->