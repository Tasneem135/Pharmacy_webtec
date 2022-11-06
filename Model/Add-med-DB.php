<?php

include ("../Model/Connect.php");

if(isset($_POST['Submit'])){
   
    $name=$_POST['name'];
    $dis=$_POST['dis'];
    $coname=$_POST['coname'];
    $no=$_POST['no'];
    $price=$_POST['price'];
    $exp=$_POST['exp'];
    $comment=$_POST['Comment'];



 $sql ="insert into medicine (Name,Disease,CompanyName,NoOfMed,Price,ExpireDate,Comment) 
        values('$name','$dis','$coname',' $no' , '$price' , '$exp' ,'$comment' )";

 $result =mysqli_query($con , $sql);
 if($result){
    header('location:../View/Admin-add-med.php');
 }
 else{
    die(mysqli_error($con));
 }
}

?>