<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>News Spot</title>
		<!-- Favicon icon-->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<!-- Bootstrap core CSS -->

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="bootstrap/dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" src="bootstrap/js/dropdown.js"></script>
		<!--  CSS -->
		<link href="includes/css/hover-effect.css" rel="stylesheet">
		<link href="bootstrap/theme.css" rel="stylesheet">
		<!--  Java scripts -->
		<stript type="text/javascript" src="../css/validate.js"></script>
		<link href="includes/css/textp.css" rel="stylesheet">
		<style>
		@import url('https://fonts.googleapis.com/css?family=Bungee|Bungee+Inline|Bungee+Shade');
		</style>

	</head>

	<body>
		<br></br>
		<?php include 'includes/php/header.php'; ?>
		<hr>
		<div class="container">
	      <div class="row">
		      <div class="col-md-3">
				<div class="panel panel-default">
				  <div class="panel-heading">Account</div>
				  <div class="panel-body">
				  	<ul class="nav nav-pills nav-stacked">
					  <li><a href="./login.php">Login</a></li>
					  <li class="active"><a href="./signup.php">Register</a></li>
					</ul>
				  </div>
			  </div>
			</div><!--end of col-md-3  left pannel -->
			<div class="col-md-9">
				<form role="form" class="form-horizontal" onsubmit="return validate(this);" action="" method="POST" >
				  	 <div class="page-header">
				      <h2>Register Account</h2>
				      <p>If you already have an account with us, please login at the <a href="./login.php">Login</a> page.</p>
					 </div>

				     <div class="form-group">
				       <label for="first" class="col-md-3 control-label">First Name</label>
				       <div class="col-md-9">
				       <input type="text" class="form-control" name="first" value="<?=@$firstName?>" onfocus="change(this)" onblur="change(this)">
				       </div>
				     </div>
				     <div class="form-group">
				       <label for="last" class="col-md-3 control-label">Last Name</label>
				       <div class="col-md-9">
				       <input type="text" class="form-control" name="last" value="<?=@$lastName?>" onfocus="change(this)" onblur="change(this)">
				       </div>
				     </div>
				     <div class="form-group">
				       <label for="email" class="col-md-3 control-label" >Email</label>
				       <div class="col-md-9">
				       <input type="email" class="form-control error" name="email" value="<?=@$email?>" onfocus="change(this)" onblur="change(this)">
				       </div>
				     </div>
				     <div class="form-group">
				       <label for="password1" class="col-md-3 control-label">Password</label>
				       <div class="col-md-9">
				       <input type="password" class="form-control" name="password1" value="<?=@$pwd?>" onfocus="change(this)" onblur="change(this)">
				       </div>
				     </div>
				     <div class="form-group">
				       <label for="password2" class="col-md-3 control-label">Password Confirm</label>
				       <div class="col-md-9">
				       <input type="password" class="form-control" name="password2" value="<?=@$pwdConfirm?>" onfocus="change(this)" onblur="change(this)">
				       </div>
				     </div>
				  <div class="form-group">
				    <div class="col-md-offset-3 col-md-9">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox" name="privacy" value="<?=@$privacy?>"> I agree to the <a href="#">privacy policy</a>
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-md-offset-3 col-md-9">
				      <button type="submit" name="submit" class="btn btn-primary">Register</button>
				    </div>
				  </div>
			   </form>
			</div>
		  </div> <!--end of row -->
		</div>  <!-- end container -->



		    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/assets/js/jquery.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
	<?php echo '<hr>'; include "includes/php/footer.php"; ?>

</html>