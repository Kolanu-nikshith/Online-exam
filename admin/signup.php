<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include('head.php'); ?>
	
</head>
<body style="background-color: #f5f5f5;">
	<!--Top Bar -->
<?php include('topbar.php');?>
	<!--/Top Bar-->
	<!--banner-->
<?php include('banner.php');?>
	<!--/banner-->
	<!--navbar-->
<?php include('navbar.php');?>
	<!--/navbar-->
<!--Sign up-->
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Add Student</h2>
			</div>
			<hr />
			<div class="modal-body">
				
				<form action="signup.php" role="form" name="signup" id="signup" method="POST">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter Full Name" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="user" id="user"  class="form-control" placeholder="Roll Number" />
						</div>
					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-envelope"></span>
							</span>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email address" />
						</div>
					</div>	
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" id="password" name="password" class="form-control" placeholder="Password" />

						</div>

					</div>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-lock"></span>
							</span>
							<input type="password" class="form-control" id="password1" name="password1" placeholder="Re-enter Password" />

						</div>

					</div>
					<div class="form-group">
					    <select class="form-control" id="sel1" name="sel1">
						    <option name="be1" value="1">B.E 1/4</option>
						    <option name="be2" value="2">B.E 2/4</option>
						    <option name="be3" value="3">B.E 3/4</option>
						    <option name="be4" value="4">B.E 4/4</option>
					    </select>

					</div>
					<div class="form-group">
					    <select class="form-control" id="sel2" name="sel2">
						    <option name="cse"  value="cse">C.S.E</option>
						    <option name="ece"  value="ece">E.C.E</option>
						    <option name="eee"  value="eee">E.E.E</option>
						    <option name="civil" value="civil">Civil</option>
						    <option name="mech" value="mech">MECH</option>
					    </select>

					</div>


					<div class="form-group text-center">
						<button type="submit" class="btn " name="sign" style="background-color: #fb641b;">+Add Student</button>
										
					</div>

				</form>
			</div>
		</div>
	</div>


<!--/Sign up-->
<script type="text/javascript" src="../js/signupvalidate.js"></script>
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
</body>
</html>