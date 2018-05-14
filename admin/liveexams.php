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


<div class="container-fluid">
 
  <div class="row" style="margin-top: 20px;">
  	
		    <div class="col-lg-3 " >
		    	<h2>Available Subjects</h2><br>
		    	<ul>
					<?php 
					 $query1 = "SELECT subname FROM subjects";
						if ($result1=mysqli_query($db,$query1))
						{
										  // Fetch one and one row
						 while ($row=mysqli_fetch_row($result1))
							    {echo "<li>";
						echo $row[0];echo "</li>";
							    }
							  // Free result set
							  mysqli_free_result($result1);
						}

					?>
				</ul>


			</div>
		 	<div class="col-lg-6" style="border-left: 1px solid black;border-right: 1px solid black; " >
		      
<!--addsub-->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Select Subject</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form action="liveexams.php" role="form" name="live" id="live" method="POST">
				<div class='col-md-12'>
					 <div class="form-group">
							
					    <select class="form-control" id="subsl" name="subsl">
						    <?php 
					 $query1 = "SELECT subname FROM subjects";
						if ($result1=mysqli_query($db,$query1))
						{
										  // Fetch one and one row
						 while ($row=mysqli_fetch_row($result1))
							    {echo "<option>";
						echo $row[0];echo "</option>";
							    }
							  // Free result set
							  mysqli_free_result($result1);
						}

					?>
						    
					    </select>

					 </div>
					</div>

					<div class="form-group text-center">
						<button type="submit" name="filter" class="btn " style="background-color: #fb641b;color: #ffffff;">Filter</button>
						<!--<a href='signup.php' class="btn btn-link">Sign up now>></a>-->
						
					</div>

				</form>
			</div>
		</div>
	</div>
 <!--/addsub--> 
		    </div>
		 <div class="col-lg-3 " >
		    	<h2>Available tests:</h2><br>
		    	<ul>
					<?php 
					if (isset($_POST['filter'])) {

	$sub = $_POST['subsl'];
	
					echo "<u><b>";
					echo $sub;
					echo "</b></u>";
					 $query1 = "SELECT testname,subject,start FROM tests where DATE(start) = CURDATE()
and start < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 DAY) and subject = '$sub' ";
						if ($result1=mysqli_query($db,$query1))
						{
										  // Fetch one and one row
						 while ($row=mysqli_fetch_row($result1))
							    {echo "<li>";
						echo $row[0];
						echo "-";
						echo $row[1];
						echo "<br>starts at: ";
						echo $row[2];
						echo "</li>";

							    }
							  // Free result set
							  mysqli_free_result($result1);
						}

					}?>
				</ul>


			</div>
    </div>
   
  </div>
</div>
 
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script  src="../addsub.js"></script>
</body>
</html>