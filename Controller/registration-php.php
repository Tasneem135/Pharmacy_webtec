<?php

  $fname= $lname =$email=$gender=$username= $pass = "";
  $fErr=$lErr=$EmailErr=$gErr=$uErr=$PassErr="";



if($_SERVER["REQUEST_METHOD"]== "POST")
{
if (empty($_POST["fname"])) {
$fErr = "Inforfation Required ";
} else {
$fname= validateInpute($_POST["fname"]);
}

if (empty($_POST["lname"])) {
$lErr = "Inforfation Required ";
} else {
$lname= validateInpute($_POST["lname"]);
}
if (empty($_POST["gender"])) {
$gErr = "Inforfation Required ";
} else {
$gender= validateInpute($_POST["gender"]);
}

if (empty($_POST["email"])) {
$EmailErr = "Inforfation Required ";
} else {
$email= validateInpute($_POST["email"]);
}
if (empty($_POST["username"])) {
$uErr= "Inforfation Required ";
} else {
$username= validateInpute($_POST["username"]);
}
if (empty($_POST["pass"])) {
$PassErr = "Information Required";
} else {
$pass = validateInpute($_POST["pass"]);
}

}

function validateInpute($data){
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}

?>