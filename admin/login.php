<?php include('server.php'); ?>
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
				<h2 class="text-center">Login</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form action="login.php" role="form" name="login" id="login" method="POST">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="user" id="user" class="form-control" placeholder="Roll Number" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" name="log" class="btn " style="background-color: #fb641b;color: #ffffff;">Login</button>
						<!--<a href='signup.php' class="btn btn-link">Sign up now>></a>-->
						<a href="forgot.php" class="btn btn-link">forgot Password?</a>
					</div>

				</form>
			</div>
		</div>
	</div>
 <!--/Login--> 
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script  src="../js/loginvalidate.js"></script>

</body>
</html>