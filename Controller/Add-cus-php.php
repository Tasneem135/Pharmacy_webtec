<?php

 $fname= $fname= $email =  $mbl= $gender= "";
$fnameErr= $lnameErr= $emailErr= $mblErr= $genErr="";


if($_SERVER["REQUEST_METHOD"] == "POST"){

if (empty($_POST["fname"])) {
$fnameErr = " Information required";
} else {
$fname = validateInpute($_POST["fname"]);
}

if (empty($_POST["lname"])) {
$lnameErr = " Information required";
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
$genErr = " Information required";
} else {
$gender = validateInpute($_POST["gender"]);
}
}


function validateInpute($data){
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}

?>