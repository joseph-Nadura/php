<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Project System</title>
	<link rel="icon" type="image/x-icon" href="./dist/img/jrmsu.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="login/css/style.css">

	</head>
	<body style="background-image: url('./dist/img/Bg.jpg'); background-size: cover; background-repeat: no-repeat;">

  <?php
  		if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible' id='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
  	?>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5" style="background-color:#E0F7FA;">
		      
            <center><img src="./dist/img/jrmsu.png" width="210"/></center>
		      
		      	<h3 class="text-center mb-4"><b>PROJECT SYSTEM</b></h3>
						<form action="login.php" method="POST" class="login-form">

		      	<div class="form-group">
		      			<input type="text" id="username" name="username" class="form-control rounded-left" placeholder="Username" required>
		      	</div>

	            <div class="form-group d-flex">
	              <input type="password" id="password" name="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>

	            <div class="form-group">
	            	<button type="submit" name="login" id="submit" class="form-control btn btn-primary rounded submit px-3">Login</button>
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
	          </form>
			  <center><a href="https://www.facebook.com/jb.nadura" style="color:black;" >Developed by:   Joseph B Nadura</a></center>
            
	        </div>
				</div>
			</div>
		</div>
	</section>

  <script src="login/js/jquery.min.js"></script>
  <script src="login/js/popper.js"></script>
  <script src="login/js/bootstrap.min.js"></script>
  <script src="login/js/main.js"></script>

	</body>
</html>

