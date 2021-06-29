<?php
session_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Login</title>
<link rel="shortcut icon" type="image/png" href="img/login_logo.png" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.message{
	color:red;
	font-size:1.5em;
	}
.logout{
	color:red;}

</style>
</head>

<body bgcolor="pink">
<br />

<div class="container well">
<h2 align="center">User Login</h2>
<br />
<?php 
if(isset($_GET["mes"]))
{ 
	echo $_GET["mes"];
}

?>
<br />
<div class="" style="padding-left:30%; padding-right:30%;">
<form method="POST" action="php/loginProcess.php" onsubmit="return Validate()" name="vform" autocomplete="off">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="empname" type="text" class="form-control input-lg" name="empname" placeholder="Empname">
      
    </div><div id="name_error" class="val_error"></div>
    <br />
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Password">
      <div id="password_error" class="val_error"></div>
    </div>
    <br>
    <button type="submit" class="btn btn-success btn-lg " style="width:48%">LOG IN</button>
    <button type="reset" class="btn btn-danger btn-lg " style="width:48%">CLEAR</button>
    </form>
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="php/forgot.php">Forgot Password ? </a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="php/NewUser.php">New User Registration</a>
    
</div>
</div>


<script type="text/javascript">
var empname = document.forms["vform"]["empname"];
var password = document.forms["vform"]["password"];
//ERROR IN USERNAME & PASSWORD
var name_error  = document.getElementById('name_error');
var password_error  = document.getElementById('password_error');

empname.addEventListener("blur",nameVerify,true);
password.addEventListener("blur",passwordVerify,true);

function Validate() {
	if(empname.value==""){
		alert('empname Field is Empty! Fill it.');
		username.focus();
		return false;
	}
//password
	if(password.value==""){
		alert('Password Field is Empty! Fill it.');
		password.focus();
		return false;
	}
}
function nameVerify(){
	if(empname.value !=""){
		empname.style.border="1px solid #5E6E66";
		name_error.innerHTML = "";
		return true;
	}
}
function passwordVerify(){
	if(password.value !=""){
		password.style.border="1px solid #5E6E66";
		password_error.innerHTML = "";
		return true;
	}
}
</script>




</body>
</html>