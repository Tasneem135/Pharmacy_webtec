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
	<title>Home Page</title>
	<link href="Home.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<body>
  <div class="container">
  <div class="image">
  	<img class="img" src="picture/med2.jpg">
  </div>	
<div class="welcome">
    <h1>Hello!<h1>
  	<h2><?php echo $_SESSION['firstname']." ".$_SESSION['lastname'];?></h2>
    <h3>Welcome To Pharmacy Management<h3><br>
  	<button class="btn"><a href="Admin-header.php"><h4>Start Here<h4></a></button><br><br>
  
    <div class="exit">Don't Want To Start? <a href="../Controller/logout.php">Log out</a></div>
  </div>
  </div>

</body>
</html>