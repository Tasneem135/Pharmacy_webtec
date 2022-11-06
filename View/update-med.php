<?php
session_start();

include ("../Model/update-med-DB.php");

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
<title>Add Medicine Information</title>
<link rel="stylesheet" type="text/css" href="update-med.css">
<style>
.error {color: #FF0000;}
</style>
</head>
<body>




<br><br>
<div class="container">

<div class="right">
<h1>Update Medicines</h1><hr><br><br>

<form method="post" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<label>Medicine Name: </label><input type="text" id="name" name="name" required="" value="<?php echo $name ?>" >  <br><br>
<label>Disease: </label><input type="text" id="dis" name="dis" required="" value="<?php echo $dis ?>" > <br><br>
<label>  Company Name: </label><input type="text" id="coname" name="coname" required="" value="<?php echo $coname ?>" >  <br><br>
<label> Medicine Available: </label><input type="number" id="no" name="no" required=""  value="<?php echo $no ?>" ><br><br>
<label> Medicine Price: </label><input type="number" id="price" name="price" required="" value="<?php echo $price ?>"  ><label>Taka</label><br><br>
<label >Comment: </label> <textarea name="Comment" class="comment" id="comment"  value="<?php echo $comment ?>"></textarea><br><br>

<input type="submit" name="Submit" class="btn" value="Update">
</form>
</div>
</div>

</body>
</html>