<?php include('server.php'); ?>
<?php 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }

?>

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
				<h2 class="text-center">Add Faculty</h2>
			</div>
			<hr />
			<div class="modal-body">
				
				<form action="addfaculty.php" role="form" name="addf" id="addf" method="POST">
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
							<input type="text" name="user" id="user"  class="form-control" placeholder="Employee ID" />
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
							<span class="glyphicon glyphicon-phone"></span>
							</span>
							<input type="text" class="form-control" id="number" name="number" placeholder="Phone number" />
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
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-comment"></span>
							</span>
							<input type="textarea" class="form-control" id="description" name="description" placeholder="Description" />

						</div>

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
						<button type="submit" class="btn " name="addbtn" style="background-color: #fb641b;">+Add Faculty</button>
										
					</div>

				</form>
			</div>
		</div>
	</div>


<!--/Sign up-->
<script type="text/javascript" src="../js/addf.js"></script>
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
</body>
</html>