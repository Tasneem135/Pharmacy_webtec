<?php

$name = $dis = $coname =$no= $co  = $price = $exp="";
$NameErr = $disErr  = $ConameErr= $NolErr = $SeaErr= $priErr= $expErr="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

if (empty($_POST["name"])) {
$NameErr = " Information required";
} else {
$name = validateInpute($_POST["name"]);
}


if (empty($_POST["dis"])) {
$disErr = "Information required";
} else {
$dis = validateInpute($_POST["dis"]);

}


if (empty($_POST["coname"])) {
  $ConameErr = "Information Require";

} else {
$coname = validateInpute($_POST["coname"]);

}

if (empty($_POST["no"])) {
  $NolErr = "Information Require";

} else {
$no = validateInpute($_POST["no"]);

}
if (empty($_POST["price"])) {
  $priErr = "Information Require";

} else {
$price = validateInpute($_POST["price"]);

}

if (empty($_POST["exp"])) {
  $expErr = "Information Require";

} else {
$exp = validateInpute($_POST["exp"]);

}

}


function validateInpute($data){
$data = trim($data); 
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;

}

?>
