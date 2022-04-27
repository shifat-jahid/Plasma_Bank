      <!-- Error Alert Start -->
      <?php
      if (!isset($_SESSION)) {
            session_start();
        }
          if(isset($_SESSION['error'])){
      ?>
      <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['error']?>
      </div>
      <?php 
        }
        unset($_SESSION["error"]);
      ?>
      <!-- Error Alert End -->
