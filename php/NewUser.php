<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="jumbotron">
		<h2 align="center">New User Registration</h2>
	</div>
	<div  class="container" style="font-size: 16px;">
		<center>Already Member ? Please ! <a href="../index.php">Login</a></center>
		<br />
		<div>
			<form class="form-horizontal" action="signup.php" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="empname">Emp Name : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="empname" placeholder="Enter Your Name Here..." required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="empid">Emp Id : </label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="empid" placeholder="Enter Your Id..." required>
    </div>
  </div>
                <div class="form-group">
    <label class="control-label col-sm-2" for="work">Emp Work Status : </label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="work" placeholder="Enter Your work status..." required>
    </div>
  </div>
                
                <div class="form-group">
    <label class="control-label col-sm-2" for="dob">DOB : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="dob" placeholder="Enter Your Date of birth Here..." required>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email ID : </label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" name="email" placeholder="Enter Your Email ID" required>
    </div>
  </div>

                <div class="form-group">
    <label class="control-label col-sm-2" for="designation"> Designation : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="designation" placeholder="Enter Your Designation Here..." required>
    </div>
  </div>
                
                <div class="form-group">
    <label class="control-label col-sm-2" for="role"> Role : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="role" placeholder="Enter Your Role Here..." required>
    </div>
  </div>
                
                <div class="form-group">
    <label class="control-label col-sm-2" for="contact">Contact : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="contact" placeholder="Enter Your Contact Here..." required>
    </div>
  </div>
                
                
                <div class="form-group">
    <label class="control-label col-sm-2" for="blood">Blood Group : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="blood" placeholder="Enter Your blood group Here..." required>
    </div>
  </div>
                
  <div class="form-group">
    <label class="control-label col-sm-2" for="password">Password : </label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="password" placeholder="Enter Your Password" required>
    </div>
  </div>

  
  

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<span class="help-block" style="color: red; padding-left: 17%;">All Fields are Mandatory</span>

		</div>


	</div>
    

</body>
</html>