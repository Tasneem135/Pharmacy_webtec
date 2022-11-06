<?php

session_start();

include ("../Model/Add-emp-DB.php");
include ("../Controller/Add-emp-php.php");

if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
{
       header("Location:../View/login.php");
       die();
}
  


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add Employee Information</title>
<link rel="stylesheet" type="text/css" href="Add-emp.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>


<br><br>
<div class="container">
<div class="left">

      <h6 style="font-style: italic; font-size: 30px; margin-left: 20px; color: darkblue;">Pharmacy Management</h6><br>
      
      <a href="../View/Admin-add-med.php">    Add Medicine </a><br><br>
      <a href="../View/Admin-modify-med.php">    Medicines Information </a><br><br>
      <a href="../View/Admin-add-emp.php">    Add Employee </a><br><br>
      <a href="../View/Admin-modify-emp.php">     Employees Information</a><br><br>
      <a href="../View/Admin-add-cus.php">    Add Customer </a><br><br>
      <a href="../View/Admin-modify-cus.php">     Customers Information</a><br><br>
      <a href="../View/search-order.php">   Customer Orders</a><br><br>
      <a href="../View/privew-sale.php">   Preview Medicine Sales </a><br><br>
      <a href="../Controller/logout.php">   Logout </a>
   
</div>
<div class="right">
<h1>Add Employee</h1><hr><br><br>

<form method="post" action="">
<label> First Name: </label><input type="text" id="fname" name="fname" required=""> <span class="error">*<?php echo $fNameErr;?></span> <br><br>
<label> Last Name: </label><input type="text" id="lname" name="lname" required=""> <span class="error">*<?php echo $lNameErr;?></span> <br><br>
<label>Email: </label><input type="email" id="email" name="email" required=""> <span class="error">*<?php echo $emailErr;?></span> <br><br>
<label> Mobile no: </label><input type="number" id="mbl" name="mbl" ><span class="error">*<?php echo $mblErr;?></span><br><br>
<label >Gender: </label>
<input type="radio" name="gender" id="gender" value="Male" required=""><label >Male </label>
<input type="radio" name="gender" id="gender" value="Female"><label >Female </label>
<input type="radio" name="gender" id="gender" value="Others"><label >Others </label><span class="error">*<?php echo $genErr;?></span> <br><br>
<label> Duty Time: </label><input type="time" id="stime" name="stime" required=""><label>To</label><input type="time" id="ltime" name="ltime"> <span class="error">*<?php echo$dutyErr;?></span> <br><br>
<label> Salary: </label><input type="number" id="salary" name="salary" required=" "><label>Taka</label><span class="error">*<?php echo $salErr;?></span><br><br><br><br>
<input type="submit" name="Submit" class="btn "value="Add">
</form>
</div>
</div>

</body>
</html>