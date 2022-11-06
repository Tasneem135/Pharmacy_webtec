<?php

include ("../Model/Connect.php");

if(isset($_GET['deletedid'])){
	$SerialNo=$_GET['deletedid'];

	$sql = "delete from medicine where SerialNo=$SerialNo";
	$result =mysqli_query($con , $sql);
	if($result){
		header('location:../View/Admin-modify-med.php');

	}else{
			die(mysqli_error($con));

	}
}

?>