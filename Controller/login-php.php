<?php

  $username= $pass = "";
  $uErr=$PassErr="";



if($_SERVER["REQUEST_METHOD"]== "POST")
{

if (empty($_POST["username"])) {
$uErr = " ";
} else {
$username= validateInpute($_POST["username"]);
}
if (empty($_POST["pass"])) {
$PassErr = "";
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