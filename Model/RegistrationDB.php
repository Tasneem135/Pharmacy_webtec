<?php

if(isset($_POST['submit'])){

    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $username=$_POST['username'];
    $pass=$_POST['pass'];

    $uname= "select * from registration where username='$username' ";

     $user =mysqli_query($con , $uname);
     $unamecount=mysqli_num_rows($user);

     if($unamecount>0){
     	
     	echo "<script>alert('user name already exists')</script>";
     }else{

      $sql ="insert into registration (firstname,lastname,email,gender,username,password)
             values('$fname','$lname','$email','$gender','$username','$pass')";
     $result =mysqli_query($con , $sql);
     if($result){
    header('location:../View/login.php');
    }

     }


}


	?>