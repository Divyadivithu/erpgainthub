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
<style type="text/css">
	header{
		padding: 3%;
		background-color: teal;
	}
	header > h2{
		text-align: center;
		color: white;
	}
</style>
</head>
<body>
<header>
	<h2>Giant Hub</h2>
</header>
<br>
<br>

	<div class="container">
		<h2 align="center">Forgot Password</h2>

		<form action="forgotProcess.php" method="POST">
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="email" type="text" class="form-control" name="email" placeholder="Enter Your Correct Email ID" required="required">
  </div>
  <br>
  <button type="submit" class="btn btn-warning btn-block">Forgot</button>

</form>
<br>
<br>
<center>
<a href="../index.php" class="btn btn-success btn-block" style="width: 50%;">Back</a>		
		</center>

	</div>

</body>
</html>