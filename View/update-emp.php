<?php

session_start();

include ("../Model/update-emp-DB.php");

if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
{
       header("Location: ../View/login.php");
       die();
}

?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Employee Information</title>
<link rel="stylesheet" type="text/css" href="update-emp.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>



<br><br>
<div class="container">

<div class="right">
<h1>Update Employee</h1><hr><br><br>




<form method="post" action="">
<label> First Name: </label><input type="text" id="fname" name="fname" required="" value="<?php echo $fname ?>"> <br><br>
<label> Last Name: </label><input type="text" id="lname" name="lname" required="" value="<?php echo $lname ?>"> <br><br>
<label>Email: </label><input type="email" id="email" name="email" required="" value="<?php echo $email ?>">  <br><br>
<label> Mobile no: </label><input type="number" id="mbl" name="mbl" value="<?php echo $mbl ?>"><br><br>
<label>Gender: </label><input type="text" id="gender" name="gender" required="" value="<?php echo $gender ?>">  <br><br>
<label> Duty Time: </label><input type="text" id="stime" name="stime"  value="<?php echo $stime ?>">
<label>To</label><input type="text" id="ltime" name="ltime" value="<?php echo $ltime ?>"> <br><br>
<label> Salary: </label><input type="text" id="salary" name="salary" required=" " value="<?php echo $salary ?>"><label>Taka</label><br><br><br><br>

<input type="submit" name="Submit" class="btn"value="Update">
</form>
</div>
</div>
</body>
</html>