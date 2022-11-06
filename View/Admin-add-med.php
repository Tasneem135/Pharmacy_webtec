<?php
session_start();

include ("../Model/Add-med-DB.php");
include ("../Controller/Add-med-php.php");

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
<title>Add Medicine Information</title>
<link rel="stylesheet" type="text/css" href="Add-med.css">
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
<h1>Add Medicine</h1><hr><br><br>
<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label>Medicine Name: </label><input type="text" id="name" name="name" required=""> <span class="error"> *<?php echo $NameErr;?></span> <br><br>
<label>Disease: </label><input type="text" id="dis" name="dis" required=""> <span class="error">*<?php echo $disErr;?></span> <br><br>
<label>  Company Name: </label><input type="text" id="coname" name="coname" required=""> <span class="error">* <?php echo $ConameErr;?></span> <br><br>
<label> Medicine Available: </label><input type="number" id="no" name="no" required=""><span class="error"> *<?php echo $NolErr;?></span><br><br>
<label> Medicine Price: </label><input type="number" id="price" name="price" required=""><label>Taka</label><span class="error"> * <?php echo $priErr;?></span><br><br>
<label> Expire Date: </label><input type="date" id="exp" name="exp" required=""><span class="error"> * <?php echo $expErr;?></span><br><br>
<label >Comment: </label> <textarea name="Comment" class="comment" id="comment"  value="<?php echo $comment ?>"></textarea><br><br><br><br>
<input type="submit" name="Submit" class="btn" value="Add">
</form>
</div>
</div>
</body>
</html>