      <!-- Error Alert Start -->
      <?php
      if (!isset($_SESSION)) {
            session_start();
        }
          if(isset($_SESSION['exist'])){
      ?>
      <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['exist']?>
      </div>
      <?php 
        }
        unset($_SESSION["exist"]);
      ?>
      <!-- Error Alert End -->
