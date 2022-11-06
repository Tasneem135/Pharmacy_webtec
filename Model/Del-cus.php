<?php

include ("../Model/Connect.php");

if(isset($_GET['deletedid'])){
	$id=$_GET['deletedid'];

	$sql = "delete from customer where id=$id";
	$result =mysqli_query($con , $sql);
	if($result){
		header('location:../View/Admin-modify-cus.php');

	}else{
			die(mysqli_error($con));

	}
}

?>