<?php
// Start the session
session_start();
?>
<?php 
$email = $_POST['email'];


//Check Connection
mysql_connect("localhost","root","");
mysql_select_db('project');

//query
$result = mysql_query("SELECT * FROM `signup` WHERE  email='$email'") or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<title>Forgot Password</title>
<style type="text/css">
	header{
		padding: 3%;
		background-color: teal;
	}
	header > h2{
		text-align: center;
		color: white;
	}
	*{padding: 0; margin: 0;}
</style>
</head>
<body>
<header>
	<h2>Giant Hub</h2>
</header>
<br>
<br>
<div class="container">
	<h2>Your Empname is : <?php echo $row['empname'];?></h2>

	<h2>Your Password is : <?php echo $row['password'];?></h2>

	<a href="forgot.php" class="btn btn-success btn-block">Back</a>
</div>
</body>
</html>