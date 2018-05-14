<?php 
	session_start();

	// variable declaration
	$user="";
	$password="";
	$results="";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'online');

	// REGISTER USER
	if (isset($_POST['sign'])) {
		// receive all input values from the form
		$fullname = $_POST['name'];
		$username =  $_POST['user'];
		$email = $_POST['email'];
		$password = $_POST['password'];
			
			$query = "SELECT * FROM users WHERE username='$username'";
			$results = mysqli_query($db, $query);


			if (mysqli_num_rows($results) > 0) {
				echo '<script language="javascript">';
				echo 'alert("User already exist!")';
				echo '</script>';
			}else {
				$password = md5($password);//encrypt the password before saving in the database
				$query = "INSERT INTO users VALUES ('$fullname','$username', '$email', '$password')";
				mysqli_query($db, $query);
				echo '<script language="javascript">';
				echo 'alert("Add user successful!")';
				echo '</script>';
			}
				
			
			
			


	}

	// Register Faculty
	if (isset($_POST['addbtn'])) {
		// receive all input values from the form
		$fullname = $_POST['name'];
		$username =  $_POST['user'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$number = $_POST['number'];
		$desc = $_POST['description'];
		$dept = $_POST['sel2'];
			
			$query = "SELECT * FROM users WHERE username='$username'";
			$results = mysqli_query($db, $query);


			if (mysqli_num_rows($results) > 0) {
				echo '<script language="javascript">';
				echo 'alert("User already exist!")';
				echo '</script>';
			} else {
				$password = md5($password);//encrypt the password before saving in the database
				$query = "INSERT INTO users VALUES ('$fullname','$username', '$email', '$password')";
				mysqli_query($db, $query);
				$query2 = "INSERT INTO faculty VALUES('$fullname','$username','$email','number','$dept','$desc')";
				mysqli_query($db, $query2);
				echo '<script language="javascript">';
				echo 'alert("Add faculty successful!")';
				echo '</script>';
			
			}
				
	}
	//LIVE EXAMS



 //ADD SUBJECT
	if (isset($_POST['addsubbtn'])) {
		// receive all input values from the form
		$username =  $_POST['user'];
			
			$query = "SELECT * FROM subjects WHERE subname='$username'";
			$results = mysqli_query($db, $query);


			if (mysqli_num_rows($results) > 0) {
				echo '<script language="javascript">';
				echo 'alert("subject already exist!")';
				echo '</script>';
			} else {
				$query = "INSERT INTO subjects VALUES ('$username')";
				mysqli_query($db, $query);
				
				echo '<script language="javascript">';
				echo 'alert("Add subject successful!")';
				echo '</script>';
			
			}
				
	}


	// LOGIN USER
	if (isset($_POST['log'])) {
		$username = $_POST['user'];
		$password = $_POST['password'];

		/*if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}*/

//		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				echo '<script language="javascript">';
				echo 'alert("Login Failed, Try again.")';
				echo '</script>';
			}
		//}
	}

?>