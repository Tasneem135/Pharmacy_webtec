<?php

include ("../Model/Connect.php");

if(isset($_POST['Submit'])){
    $id=$_POST['id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $mbl=$_POST['mbl'];
     $gender=$_POST['gender'];


 $sql ="insert into customer (id,fname,lname,email,mbl,gender) values('$id','$fname','$lname','$email',' $mbl','$gender')";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-add-cus.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>