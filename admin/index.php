<?php 
	session_start(); 

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
	<?php include('head.php');?>
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

	<div class="container">

		<!-- notification message 
		<?php //if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						//echo $_SESSION['success']; 
						//unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php //endif ?>-->

		<!-- logged in user information -->
	<div>
		
	</div>
		
</body>
</html>