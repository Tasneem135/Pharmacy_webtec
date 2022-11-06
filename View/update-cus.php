<?php
session_start();

include ("../Model/update-cus-DB.php");

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
<title>Add Customer Information</title>
<link rel="stylesheet" type="text/css" href="update-cus.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>


<br><br>
<div class="container">

<div class="right">
<h1>Update Customer</h1><hr><br><br>

<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label> First Name: </label><input type="text" id="fname" name="fname" required="" value="<?php echo $fname ?>" >  <br><br>
<label> Last Name: </label><input type="text" id="lname" name="lname" required=""  value="<?php echo $lname ?>" ><br><br>
<label>Email: </label><input type="email" id="email" name="email" required=""  value="<?php echo $email ?>" ><br><br>
<label> Mobile no: </label><input type="text" id="mbl" name="mbl"  value="<?php echo $mbl ?>" ></span><br><br>
<label>Gender: </label><input type="text" id="gender" name="gender"  value="<?php echo $gender ?>" ></span><br><br><br><br>

<input type="submit" name="Submit" class="btn" value="Update">
</form>
</div>
</div>
</body>
</html>