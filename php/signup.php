<?php
$empname=$_POST["empname"];
$empid=$_POST["empid"];
$work = $_POST["work"];
$dob = $_POST["dob"];
$email=$_POST["email"];
$designation = $_POST["designation"];
$role = $_POST["role"];
$contact = $_POST["contact"];
$blood = $_POST["blood"];
$password=$_POST["password"];
//Check Connection
$con=mysql_connect("localhost","root","");
$db=mysql_select_db('project');

// values insert methoed to table must table name
  $in="INSERT INTO `signup`(`empname`,`empid`,`work`,`dob`,`email`,`designation`,`role`,`contact`,`blood`,`password`) VALUES ('$empname','$empid','$work','$dob','$email','$designation','$role','$contact','$blood','$password')";
  if(mysql_query($in,$con))
  {
  	header("location:../index.php?mes=<p class='message'> Register Sucessfully... Please Login Here...</p>");

  }
  else
  {
 echo "Values are Not Successfully Created"."<br>";
  }



?>