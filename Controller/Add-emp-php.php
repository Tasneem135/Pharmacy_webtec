<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
$fname= $lname=$email= $mbl=  $gender =$duty   = $salary= "";
$fNameErr=$lNameErr= $emailErr=$mblErr=$genErr =$dutyErr= $salErr= "";





if($_SERVER["REQUEST_METHOD"] == "POST"){

if (empty($_POST["fname"])) {
$fNameErr = " Information required";
} else {
$name = validateInpute($_POST["fname"]);
}

if (empty($_POST["lname"])) {
$lNameErr = " Information required";
} else {
$lname = validateInpute($_POST["lname"]);
}

if (empty($_POST["email"])) {
$emailErr = " Information required";
} else {
$email = validateInpute($_POST["email"]);
}

if (empty($_POST["mbl"])) {
$mblErr = " Information required";
} else {
$mbl = validateInpute($_POST["mbl"]);
}


if (empty($_POST["gender"])) {
$genErr = "Information required";
} else {
$gender = validateInpute($_POST["gender"]);

}



if (empty($_POST["duty"])) {
  $dutyErr = "Information Require";

} else {
$duty = validateInpute($_POST["duty"]);

}

if (empty($_POST["salary"])) {
  $salErr = "Information Require";

} else {
$salary = validateInpute($_POST["salary"]);

}

}


function validateInpute($data){
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}

?>