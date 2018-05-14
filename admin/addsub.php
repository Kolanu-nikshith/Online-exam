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
		 	<div class="col-lg-8" style="border-left: 1px solid black;" >
		      
<!--addsub-->
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Add Subject</h2>
			</div>
			<hr />
			<div class="modal-body">
				<form action="addsub.php" role="form" name="addsub" id="addsub" method="POST">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-pencil"></span>
							</span>
							<input type="text" name="user" id="user" class="form-control" placeholder="Subject name" />
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" name="addsubbtn" class="btn " style="background-color: #fb641b;color: #ffffff;">Add subject</button>
						<!--<a href='signup.php' class="btn btn-link">Sign up now>></a>-->
						
					</div>

				</form>
			</div>
		</div>
	</div>
 <!--/addsub--> 
		    </div>
	
    </div>
   
  </div>
</div>
 
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script  src="../js/addsub.js"></script>
</body>
</html>