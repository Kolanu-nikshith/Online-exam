
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php');?>
	
</head>
<body style="background-color: #f5f5f5;">
	<!--Top Bar -->
<?php include('topbar.php');?>
	<!--/Top Bar-->
	<!--banner-->
<?php include('banner.php');?>
	<!--/banner-->

<!--Login-->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Forgot password?</h2>
			</div>
			<hr />
			<div class="modal-body">
				<div class="alert alert-success">
        			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      		  		<strong>Reset link sent successfully!</strong> 
     			</div>
				<form action="" role="form" name="forgot" id="forgot">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
							</span>
							<input type="email" name="email" id="email" class="form-control" placeholder="Enter email address" />
						</div>
					</div>
					

					<div class="form-group text-center">
						<button type="submit" class="btn " style="background-color: #fb641b;color: #ffffff;">Send reset link>></button>
						<a href='login.php' class="btn btn-link">Login</a>
						<!--<a href='signup.php' class="btn btn-link">Sign up now</a>-->
					
					</div>

				</form>
			</div>
		</div>
	</div>
 <!--/Login--> 

<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script  src="../js/forgotvalidate.js"></script>
</body>
</html>