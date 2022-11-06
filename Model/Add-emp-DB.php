<?php

include ("../Model/Connect.php");

if(isset($_POST['Submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mbl=$_POST['mbl'];
    $gender=$_POST['gender'];
    $stime=$_POST['stime'];
    $ltime=$_POST['ltime'];
    $salary=$_POST['salary'];


 $sql ="insert into emp (FirstName,LastName,Email,Mobile,Gender,StartTime,LastTime,Salary) 
         values('$fname','$lname','$email', '$mbl','$gender','$stime', '$ltime','$salary')";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-add-emp.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>