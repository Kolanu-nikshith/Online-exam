	<!--navbar-->
	<nav class="navbar navbar-inverse mainNavbar" style="margin-bottom: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navcoll">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navcoll">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add<span
							class="caret"></span>
					</a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="signup.php">Student</a></li>
							<li><a href="addfaculty.php">Faculty</a></li>
							<li><a href="addsub.php">Subject</a></li>
							<li><a href="addtest.php">Test</a></li>
						</ul></li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alter<span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Student</a></li>
							<li><a href="">Faculty</a></li>
							<li><a href="">Subject</a></li>
							<li><a href="">Test</a></li>
						</ul></li>

					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Delete<span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="delstudent.php">Student</a></li>
							<li><a href="delfaculty.php">Faculty</a></li>
							<li><a href="delsubject.php">Subject</a></li>
							<li><a href="deltest.php">Test</a></li>
							<!--<li><a href="sub/departments/s&h/civilv&m.php">S & H</a></li>-->
						</ul></li>
						<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Student</a></li>
							<li><a href="">Faculty</a></li>
							<li><a href="">Subject</a></li>
							<li><a href="">Test</a></li>
							<!--<li><a href="sub/departments/s&h/civilv&m.php">S & H</a></li>-->
						</ul></li>

					<li><a href="liveexams.php">Live Exams</li>

					<li><a href="generate.php">Generate Report</li>
					<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" action="">
					  <div class="input-group">
					    <input type="text" class="form-control" placeholder="Search">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit">
					        <i class="glyphicon glyphicon-search"></i>
					      </button>
					    </div>
					  </div>
					</form>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<?php  if (isset($_SESSION['username'])) : ?>
									<?php echo $_SESSION['username']; ?>
									
								<?php endif ?><span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Profile</a></li>
							<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
						</ul>
					</li>
				</ul>


				</ul>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-inverse mobileNavbar">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#myNavbar">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MATRUSRI Engineering College</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a>
					</li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Add<span	class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="signup.php">Student</a></li>
							<li><a href="addfaculty.php">Faculty</a></li>
							<li><a href="addsub.php">Subject</a></li>
							<li><a href="addtest.php">Test</a></li>
						</ul>
					</li>
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Alter<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Student</a></li>
							<li><a href="">Faculty</a></li>
							<li><a href="">Subject</a></li>
							<li><a href="">Test</a></li>
						</ul>
					</li>

					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Delete<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="delstudent.php">Student</a></li>
							<li><a href="delfaculty.php">Faculty</a></li>
							<li><a href="delsubject.php">Subject</a></li>
							<li><a href="deltest.php">Test</a></li>
							<!--<li><a href="sub/departments/s&h/civil.php">S & H</a></li>-->
						</ul>
					</li>

					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">View<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Student</a></li>
							<li><a href="">Faculty</a></li>
							<li><a href="">Subject</a></li>
							<li><a href="">Test</a></li>
						</ul>
					</li>

					<li><a href="liveexams.php">Live Exams</a></li>
					<li><a href="generate.php">Generate Report</a></li>
					<li><a href="">Contact Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<form class="navbar-form navbar-left" action="">
					  <div class="input-group">
					    <input type="text" class="form-control" placeholder="Search">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit">
					        <i class="glyphicon glyphicon-search"></i>
					      </button>
					    </div>
					  </div>
					</form>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" href="#">
								<?php  if (isset($_SESSION['username'])) : ?>
									<?php echo $_SESSION['username']; ?>
									
								<?php endif ?><span
							class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="">Profile</a></li>
							<li><a href="index.php?logout='1'" style="color: red;">logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/navbar-->
