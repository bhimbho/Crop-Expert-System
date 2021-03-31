<?php
session_start();
include '../core.php';
$admin = new Administrator;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Dashboard</title>
    <meta name="description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta property="og:title" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">
    <style type="text/css">
        .right{
            background-image: url('assets/media/photos/background-1.png'); 
            background-repeat: no-repeat;
            background-size: cover;
            background-color: rgba(0,0,0,0.3);
            background-blend-mode: overlay;
        }
    </style>
</head>
<body>
    <div class="container-fluid" style="height: 100vh">
        <div class="row" style="height: 100vh">
            <div class="col-md-4 d-flex align-items-center bg-white">
                <div class="p-3 w-100">
                    <div class="mb-3 text-center">
                        <a class="link-fx font-w700 font-size-h1" href="index.html">
                            <span class="text-dark">Crop</span><span class="text-primary">diag</span>
                        </a>
                        <p class="text-uppercase font-w700 font-size-sm text-muted">Sign In</p>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-sm-10">
                            <form class="js-validation-signin" action="" method="POST">
                            <?php
                                if (isset($_POST['submit'])) {
                                    $email = $_POST['username'];
                                    $password = $_POST['password'];
                                    if($admin->administrator_login($email, $password)){
                                        // header('location:survey.php');
                                    }
                                    else{
                                        echo "<div class='alert alert-success rounded-0'>Login Failed</div>";
                                    }
                                }
                            ?>
                                <div class="py-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-hero-lg btn-hero-primary" style="background: #0D1C1E; border: none" name="submit">
                                        <i class="fa fa-fw fa-sign-in-alt mr-1"></i> Sign In
                                    </button>
                                    <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 d-none d-md-block right">
                
            </div>
        </div>
    </div>
</main>
</div>
<script src="assets/js/dashmix.core.min.js"></script>
<script src="assets/js/dashmix.app.min.js"></script>
<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>
<!-- Page JS Code -->
<!-- <script src="assets/js/pages/op_auth_signin.min.js"></script> -->
</body>
</html>
