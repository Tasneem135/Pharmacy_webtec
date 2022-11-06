<?php



if(isset($_POST['submit'])){

	$username=$_POST['username'];
    $pass=$_POST['pass'];

     $sql= "select * from registration where username='$username' && password='$pass' ";
     $result =mysqli_query($con , $sql);

     $count=mysqli_num_rows($result);
     if($count>0){

        $row=mysqli_fetch_assoc($result);

       	$_SESSION['username']=$row['username'];
        $_SESSION['id']=$row['id'];
        $_SESSION['firstname']=$row['firstname'];
        $_SESSION['lastname']=$row['lastname'];


        if(isset($_POST['remember'])){

        	setcookie('usercookie',$username,time()+86400);
        	setcookie('passcookie',$pass,time()+86400);

              header('location:HomePage.php');
        }else{

        	header('location:HomePage.php');


        }


     }else{
     	echo "<script>alert('Wrong username or password')</script>";
     }
}

?>