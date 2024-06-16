<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <!-- Topbar -->
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12 col-12">
          <!-- Top Left -->
          <div class="top-left">
            <ul class="list-main">
              <li><i class="bi bi-telephone-fill"></i> +94 71 212 3792</li>
              <li><i class="bi bi-envelope-at-fill"></i> info@clickcart.com</li>
            </ul>
          </div>
          <!--/ End Top Left -->
        </div>
        <div class="col-lg-8 col-md-12 col-12">
          <!-- Top Right -->
          <div class="right-content">
            <ul class="list-main">
              <li><i class="bi bi-geo-alt-fill"></i> Store location</li>
              <?php 
              require "connection.php";
              session_start();
              if(isset($_SESSION['user'])) {
                $userdata = $_SESSION["user"]
                ?>
                <li><i class="bi bi-person-circle"></i><a href="#" class="text-decoration-none"><?php echo $userdata["fname"]; ?></a></li>
                <li><i class="bi bi-box-arrow-left"></i><a href="login.html" class="text-decoration-none" onclick="signout();">Logout</a></li>
                <?php
              }else {
                ?>
                <li><i class="bi bi-box-arrow-in-right"></i><a href="login.php" class="text-decoration-none">Login</a></li>
                <li><i class="bi bi-box-arrow-in-right"></i><a href="register.php" class="text-decoration-none">Register</a></li>
                <?php
              }
              ?>             
            </ul>
          </div>
          <!-- End Top Right -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Topbar -->
   <script src="js/script.js"></script>
</body>

</html>