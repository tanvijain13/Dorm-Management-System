<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
$regno=$_POST['regno'];
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$gender=$_POST['gender'];
$contactno=$_POST['contact'];
$emailid=$_POST['email'];
$password=$_POST['password'];
$food=$_POST['food'];
$work=$_POST['work'];
$course=$_POST['course'];
$sports=$_POST['sports'];
$query="insert into  userRegistration(regNo,firstName,middleName,lastName,gender,contactNo,email,password,food,work,course,sports) values(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('sssssissssss',$regno,$fname,$mname,$lname,$gender,$contactno,$emailid,$password,$food,$work,$course,$sports);
$stmt->execute();
echo"<script>alert('Student Succssfully register');</script>";
}
?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>User Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Student Registration </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading">Fill all Info</div>
									<div class="panel-body">
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										

<div class="form-group">
<label class="col-sm-2 control-label"> Registration No : <font color="red">*</font></label>
<div class="col-sm-8">
<input type="text" name="regno" id="regno"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">First Name : <font color="red">*</font></label>
<div class="col-sm-8">
<input type="text" name="fname" id="fname"  class="form-control" required="required" >
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name : </label>
<div class="col-sm-8">
<input type="text" name="mname" id="mname"  class="form-control">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Last Name : <font color="red">*</font></label>
<div class="col-sm-8">
<input type="text" name="lname" id="lname"  class="form-control" required="required">
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Gender : <font color="red">*</font></label>
<div class="col-sm-8">
<select name="gender" class="form-control" required="required">
<option value="">Select Gender</option>
<option value="male">Male</option>
<option value="female">Female</option>
<option value="others">Others</option>
</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Contact No : <font color="red">*</font></label>
<div class="col-sm-8">
<input type="text" name="contact" id="contact"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Email id: <font color="red">*</font></label>
<div class="col-sm-8">
<input type="email" name="email" id="email"  class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Password: <font color="red">*</font></label>
<div class="col-sm-8">
<input type="password" name="password" id="password"  class="form-control" required="required">
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Confirm Password : <font color="red">*</font></label>
<div class="col-sm-8">
<input type="password" name="cpassword" id="cpassword"  class="form-control" required="required">
</div>
</div>
						
<div class="panel panel-primary">
									<div class="panel-heading">STUDENT INTERESTS</div>
									<div class="panel-body">

									<div class="form-group">
<label class="col-sm-2 control-label">Work/Study Time : <font color="red">*</font></label>
<div class="col-sm-8">
<select name="work" class="form-control" required="required">
<option value="">Select Option</option>
<option value="Late Night">Late Night</option>
<option value="Early Morning">Early Morning</option>
<option value="NA">Prefer not to say</option>
</select>
</div>
</div>									

<div class="form-group">
<label class="col-sm-2 control-label">Food Preference : <font color="red">*</font></label>
<div class="col-sm-8">
<select name="food" class="form-control" required="required">
<option value="">Select Option</option>
<option value="Vegetarian">Vegetarian</option>
<option value="Non Vegetarian">Non Vegetarian</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Select Course : <font color="red">*</font></label>
<div class="col-sm-8">
<select name="course" class="form-control" required="required">
<option value="">Select Option</option>
<option value="Graduate">Graduate</option>
<option value="Under Graduate">Under Graduate</option>
<option value="LAW">LAW</option>
<option value="Medical">Medical</option>

</select>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Sports : <font color="red">*</font></label>
<div class="col-sm-8">
<select name="sports" class="form-control" required="required">
<option value="">Select Option</option>
<option value="American Football">American Football</option>
<option value="Baseball">Baseball</option>
<option value="Basketball">Basketball</option>
<option value="Ice Hockey">Ice Hockey</option>
<option value="Soccer">Soccer</option>
<option value="None">None</option>
</select>
</div>
</div>




<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
							</div>
						</div>
					</div>
				</div> 	
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
	<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>