<?php
include ("../Model/Connect.php");

$SerialNo=$_GET['updatedid'];
$sql = "select * from medicine where SerialNo=$SerialNo ";
$result =mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);

    $name=$row['Name'];
    $dis=$row['Disease'];
    $coname=$row['CompanyName'];
    $no=$row['NoOfMed'];
    $price=$row['Price'];
    $comment=$row['Comment'];


if(isset($_POST['Submit'])){
    $name=$_POST['name'];
    $dis=$_POST['dis'];
    $coname=$_POST['coname'];
    $no=$_POST['no'];
    $price=$_POST['price'];
    $comment=$_POST['Comment'];


$sql ="update medicine set SerialNo=$SerialNo,Name='$name',Disease='$dis',CompanyName='$coname', NoOfMed='$no',Price='$price', Comment='$comment'  where SerialNo=$SerialNo ";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-modify-med.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>