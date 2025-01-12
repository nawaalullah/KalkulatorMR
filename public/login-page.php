<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MR Finance</title>
    <link rel="shortcut icon" href="../src/img/LOGO MR YEARBOOK-02.png" type="image/x-icon">
    <link rel="stylesheet" href="../src/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: #efeff0;">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #efeff0;">
        <div class="container ">
            <!-- <a class="navbar-brand row" >
                <div class="col text-end pe-4">
                <img src="../src/img/LOGO MR YEARBOOK-01.png"  alt="MR Yearbook" width="80" style="margin: -25%; ">
                </div>

                <div class="col align-self-center align-middle align-items-center pt-1 ms-1" style="border-left: 2px solid #9e9e9e;">
                    <h5>MR Finance</h5>
                </div>
            </a> -->
        </div>
    </nav>
    <!-- end navbar -->
    <div class="col-12 col-lg-6 col-sm-12 py-5 bg-white position-absolute top-50 start-50 translate-middle">
    <div class = "col-12 col-lg-5 col-sm-12 mx-auto">
        <div class="col-12 text-center">
        <img src="../src/img/LOGO MR YEARBOOK-01.png"  alt="MR Yearbook" width="120" >
        <h2 class="fw-normal">Sign in</h2>
        <h6 class="my-4">Sign in and start managing MR Finances !</h6>
        </div>
            <form action="" method="post">
                <div class="col-10 mx-auto">
                <div class = "mt-5">
                    <label for="username"> Username</label>
                    <input type="username" name="username" id="username" class = "form-control" placeholder="Enter Username">
                </div>
                <div class = "mt-3 mb-5">
                    <label for="password"> Password</label>
                    <input type="password" name="password" id="password" class = "form-control" placeholder="Enter Password">
                </div>
                </div>
                <div class = "mt-5 text-center">
                    <button type="submit" name="submit" class = "btn btn-dark py-2 rounded-0 col-7 col-md-12 col-lg-8 ">Sign In</button>
                </div>
            </form>
        </div>
    </div>


  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>

<?php 
    $defaultUsername = "user1";
    $defaultPassword = "admin";

    if (isset($_POST["submit"])) {
        if ($_POST["username"] === $defaultUsername && $_POST["password"] === $defaultPassword) {
            echo header('Location: main-page.php');
        } else {
            echo "<script>alert('ulangi')</script>";
        }
    }
?>