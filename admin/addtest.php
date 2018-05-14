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
	<!--navbar-->
<?php include('navbar.php');?>
	<!--/navbar-->

<div class="container-fluid">
 
  <div class="row" style="margin-top: 20px;">
  	
		    <div class="col-lg-3 " >
		    	<h2>Available tests:</h2><br>
		    	<ul>
					<?php 
					 $query1 = "SELECT testname,subject FROM tests where start >= CURRENT_TIMESTAMP
and start < DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 1 DAY)";
						if ($result1=mysqli_query($db,$query1))
						{
										  // Fetch one and one row
						 while ($row=mysqli_fetch_row($result1))
							    {echo "<li>";
						echo $row[0];
						echo "-";
						echo $row[1];
						echo "</li>";
							    }
							  // Free result set
							  mysqli_free_result($result1);
						}

					?>
				</ul>


			</div>
		 	<div class="col-lg-8" style="border-left: 1px solid black;" >
		      
<!--addtest-->
	
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-heading">
				<h2 class="text-center">Add test</h2>
			</div>
			<hr />
			<div class="modal-body">
				
				<form action="addtest.php" role="form" name="addtest" id="addtest" method="POST">
					<div class='col-md-12'>
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="text" name="name" id="name" class="form-control" placeholder="Enter test name" />
						</div>
					</div>
					</div>
					<div class='col-md-12'>
					 <div class="form-group">
							<p style="color: white;">Select subject:</p>

					    <select class="form-control" id="subs" name="subs">
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
					<p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;Select exam time range:</p>
					<div class='col-md-6'>
				        <div class="form-group">
				        	
				            <div class='input-group date' id='datetimepicker6'>
				                <input type='text' class="form-control" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
    				</div>
				    <div class='col-md-6'>
				        <div class="form-group">
				            <div class='input-group date' id='datetimepicker7'>
				                <input type='text' class="form-control" />
				                <span class="input-group-addon">
				                    <span class="glyphicon glyphicon-calendar"></span>
				                </span>
				            </div>
				        </div>
				    </div>
				    <p style="color: white;">&nbsp;&nbsp;&nbsp;&nbsp;Select exam duration:</p>
				    <div class="col-md-12">
				     <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-time"></span>
							</span>
							<input type="time" name="duration" id="duration" class="form-control"/>
						</div>
					 </div>
					</div>
					<div class="col-md-6">
				     <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-question-sign"></span>
							</span>
							<input type="number" name="duration" id="duration" class="form-control" placeholder="Marks for each question" />
						</div>
					 </div>
					</div>

					<div class="col-md-6">
				     <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">
							<span class="glyphicon glyphicon-minus"></span>
							</span>
							<input type="number" name="duration" id="duration" class="form-control" placeholder="negative marks if any" />
						</div>
					 </div>
					</div>
					<div class='col-md-12'>
					 <div class="form-group">
							<p style="color: white;">Select faculty:</p>

					    <select class="form-control" id="subs" name="subs">
						    <?php 
					 $query1 = "SELECT iname FROM faculty";
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
						<div class='col-md-12'>
					 <div class="form-group">
							<p style="color: white;">Select batch:</p>

					    <select class="form-control" id="batch" name="batch">
						    <option name= "b48" value="48">2014-2018</option>
						    <option name= "b59" value="59">2015-2019</option>
						    <option name= "b60" value="60">2016-2020</option>
						    <option name= "b71" value="71">2017-2021</option>
						    <option name= "b82" value="82">2018-2022</option>				
						    <option name= "b93" value="93">2019-2023</option>				
						    <option name= "b04" value="04">2020-2024</option>				
						    <option name= "b15" value="15">2021-2025</option>				
						    		    
					    </select>

					 </div>
					</div>

					<div class="form-group text-center">
						<button type="submit" class="btn " name="sign" style="background-color: #fb641b;">+Add test</button>
										
					</div>

				</form>
			</div>
		</div>
	</div>


 <!--/addtest--> 
		    </div>
	
    </div>
   
  </div>
</div>
<script type="text/javascript">
    $(function () {
        $('#datetimepicker6').datetimepicker();
        $('#datetimepicker7').datetimepicker({
            useCurrent: false //Important! See issue #1075
        });
        $("#datetimepicker6").on("dp.change", function (e) {
            $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker7").on("dp.change", function (e) {
            $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
<script src='https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js'></script>
<script  src="../js/addsub.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
			<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
			 <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">



</body>
</html>