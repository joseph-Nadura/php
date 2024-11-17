

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Library System</title>
    <link rel="icon" type="image/x-icon" href="jrmsu.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="login/css1/style.css">

    <style>
       
        .login-wrap {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 30px;
            padding: 30px;
        }

        body {
            background-image: url('./dist/img/Bg.jpg');
            background-size: cover;
            position: relative;
        }

        .form-control {
            border-radius: 60px; 
        }

        .btn {
            border-radius: 60px;
        }
    </style>
</head>
<body>

<?php
session_start(); // Start the session
if (isset($_SESSION['error'])) {
    echo "
    <div class='alert alert-danger alert-dismissible' id='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
        <h4><i class='icon fa fa-warning'></i> Error!</h4>
        " . htmlspecialchars($_SESSION['error']) . "
    </div>";
    unset($_SESSION['error']);
}
?>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <center><img src="./dist/img/jrmsu.png" width="200" alt="JRMSU University Logo"/></center>
                    <h3 class="text-center mb-4"><b>Project System</b></h3>

                    <form action="login.php" method="POST" class="login-form">
                        <div class="form-group">
                            <label for="username" class="sr-only">USERNAME</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="username" id="username" name="username" class="form-control" placeholder="Username" required aria-label="username">
                            </div>
                        </div>

                        <div class="form-group d-flex">
                            <label for="password" class="sr-only">Password</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                </div>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required aria-label="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" name="login" id="submit" class="form-control btn btn-primary">Sign in</button>
                        </div>

                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary" style="color:black;">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>

                        <p class="mb-1">
                            <a href="forgot-password.php">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                            <a href="register.php" class="text-center">Register a new membership</a>
                        </p>

                        <center><a href="https://www.facebook.com/Abucayj" style="color:black;">Developed by: Junel Abucay</a></center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
   
    .login-wrap h3,
    .login-box-msg,
    .form-control,
    .btn {
        font-size: 0.9rem;
    }

  
    .icheck-primary label {
        font-size: 0.7rem; 
    }

    
    .form-control {
        height: 35px;
        padding: 5px;
    }

    .btn {
        padding: 5px 10px;
    }
</style>


<!-- JS Scripts -->
<script src="login/js1/jquery.min.js"></script>
<script src="login/js1/popper.js"></script>
<script src="login/js1/bootstrap.min.js"></script>
<script src="login/js1/main.js"></script>

</body>
</html>
