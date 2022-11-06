<?php
session_start();
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
	<title> Admin Pages</title>
	<link rel="stylesheet" type="text/css" href="Header.css">
	</head>
	<body>


	<div class="header">

		<h3 style="font-style: italic; font-size: 40px; margin-left: 35px; color: darkblue;">Pharmacy Management</h3><br><br>
		<a href="../View/Admin-add-med.php">    Add Medicine </a><br><br>
		<a href="../View/Admin-modify-med.php">     Medicines Information </a><br><br>
		<a href="../View/Admin-add-emp.php">    Add Employee </a><br><br>
		<a href="../View/Admin-modify-emp.php">     Employees Information</a><br><br>
		<a href="../View/Admin-add-cus.php">    Add Customer </a><br><br>
		<a href="../View/Admin-modify-cus.php">     Customers Information</a><br><br>
		<a href="../View/search-order.php">   Customer Orders</a><br><br>
		<a href="../View/privew-sale.php">   Preview Medicine Sales </a><br><br>
		
		<a href="../Controller/logout.php">   Logout </a>
		
	</div>
	

	</body>
</html>