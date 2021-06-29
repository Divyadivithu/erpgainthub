<?php
// Start the session
session_start();
?>
<?php 
$empname = $_POST['empname'];
$password = $_POST['password'];

//Check Connection
mysql_connect("localhost","root","");
mysql_select_db('project');

//query
$result = mysql_query("SELECT * FROM `signup` WHERE  empname='$empname' and password='$password'") or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

if($row['empname'] == $empname && $row['password'] == $password){
	$_SESSION['empname']=$row['empname'];
	$_SESSION['empid']=$row['empid'];
	$_SESSION['work']=$row['work'];
    $_SESSION['dob']=$row['dob'];
    $_SESSION['email']=$row['email'];
    $_SESSION['designation']=$row['designation'];
    $_SESSION['role']=$row['role'];
    $_SESSION['contact']=$row['contact'];
    $_SESSION['blood']=$row['blood'];
    
	$_SESSION["empname"]=$empname;
	header("location:../html/pages/index.php");
	
}else{
	//echo "Sorry Something Wrong... Login Again.!!!     Mr.".$username;
	echo "<script>alert('Login Failed');</script>";
	header("location:../index.php?mes=<p class='message'>Wrong User or Password</p>");
	
	//echo "<a href='../index.php'>Back</a>"; 
}
?>

