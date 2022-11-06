<?php
include ("../Model/Connect.php");

$id=$_GET['updatedid'];
$sql = "select * from emp where id=$id";
$result =mysqli_query($con , $sql);
$row = mysqli_fetch_assoc($result);
 $fname=$row['FirstName'];
    $lname=$row['LastName'];
    $email=$row['Email'];
    $mbl=$row['Mobile'];
    $gender=$row['Gender'];
    $stime=$row['StartTime'];
    $ltime=$row['LastTime'];
    $salary=$row['Salary'];


if(isset($_POST['Submit'])){
     $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mbl=$_POST['mbl'];
    $gender=$_POST['gender'];
    $stime=$_POST['stime'];
    $ltime=$_POST['ltime'];
    $salary=$_POST['salary'];

$sql ="update emp set id=$id,FirstName='$fname',LastName='$lname',Email='$email',Mobile='$mbl', Gender='$gender' ,StartTime='$stime' ,
       LastTime='$ltime',Salary='$salary' where id=$id ";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-modify-emp.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>