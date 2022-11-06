<?php
include ("../Model/Connect.php");

$id=$_GET['updatedid'];
$sql = "select * from customer where id=$id";
$result =mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);
$fname=$row['fname'];
$lname=$row['lname'];
$email=$row['email'];
$mbl=$row['mbl'];
$gender=$row['gender'];


if(isset($_POST['Submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mbl=$_POST['mbl'];
    $gender=$_POST['gender'];


 $sql ="update customer set id=$id,fname='$fname',lname='$lname',email='$email',mbl='$mbl',gender='$gender' where id=$id ";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-modify-cus.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>