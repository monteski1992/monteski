<?php
    session_start();
    $errors = isset($_SESSION["errors"]) ? $_SESSION["errors"] : [];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>

    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/style2.css" />
  </head>
  <body>
    <!-- Navigation Bar -->
    <div class="container first-div pt-5">
      <nav
        class="navbar sticky-top navbarrr navbar-expand-lg bg-body-tertiary bg-light"
        >
        <div class="container">
          <a class="navbar-brand" href="index.php">
            <div class="w-75">
             <img src="./assets/img/coriftech logo (1).png">
            </div>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarText"
            aria-controls="navbarText"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Careers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Programs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Media</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
            <span class="navbar-text me-5">
              <a href="#"
                ><img src="./assets/img/Symbol.png" alt="" class="pe-2"
              /></a>
              <a href="#"
                ><img src="./assets/img/Symbol (1).png" alt="" class="pe-2"
              /></a>
              <a href="#"><img src="./assets/img/Symbol (2).png" alt="" /></a>
            </span>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Of Navigation Bar -->


    
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <?php
        session_unset();
        session_destroy();
    ?>
  </body>
</html>
