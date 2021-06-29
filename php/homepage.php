<?php
session_start();
if(!isset($_SESSION['empname']))
{
	header("location:../index.php?mes=<p class='logout'>Please Login Here...</p>");
    
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
<link rel="shortcut icon" type="image/png" href="img/login_logo.png" />
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
        font-family: fantasy;
        font-size: 38px;
	}
    .t1{
        border: 1px solid black;
        border-radius: 5px;
        width: 600px;
        height: auto;
       
    }
    h4{
        color: aqua;
        
        font-family: cursive;
        font-size: 32px;
    }
    
    h3{
        color:blueviolet;
       text-align: center;
        font-family: cursive;
        font-size: 32px;
    }
    table{
        
    }
</style>
</head>
<body>
	<header>
		<h2>Employee Relactionship Protocal</h2>
	</header>
	<div class="container">
		<h3>Hi <b><?php echo $_SESSION['empname'];?></b>, <br><br> Welcome to Giant Hub</h3>
		<br>
		<h4 >Your Details are : </h4>
		<div class="container">
		<table class="t1 table table-striped">
			<tr>
				<th>Name of Employee &nbsp;</th>
				<th>: &nbsp;</th>
				<td><?php echo $_SESSION['empname']; ?></td>		
			</tr>
			<tr>
				<th>Emp Id</th>
				<th>:</th>
				<td><?php echo $_SESSION['empid'];?></td>		
			</tr>
			<tr>
				<th>Work Status</th>
				<th>:</th>
				<td><?php echo $_SESSION['work']; ?></td>		
			</tr>
			<tr>
				<th>dob</th>
				<th>:</th>
				<td><?php echo $_SESSION['dob']; ?></td>		
			</tr>
            
            <tr>
				<th>Email</th>
				<th>:</th>
				<td><?php echo $_SESSION['email']; ?></td>		
			</tr>
            <tr>
				<th>Designation</th>
				<th>:</th>
				<td><?php echo $_SESSION['designation']; ?></td>		
			</tr>
                
            <tr>
				<th>Role</th>
				<th>:</th>
				<td><?php echo $_SESSION['role']; ?></td>		
			</tr>
            <tr>
				<th>Conatct</th>
				<th>:</th>
				<td><?php echo $_SESSION['contact']; ?></td>		
			</tr>
            
            <tr>
				<th>Blood Group</th>
				<th>:</th>
				<td><?php echo $_SESSION['blood'] ;?></td>		
			</tr>
            
            
		</table>
	</div>
		
		<br>
<a href="logout.php" class="btn btn-danger btn-lg">Log Out</a>

<br><br><br><br><br><br>
</div>
</body>
</html>