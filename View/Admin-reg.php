<?php

include("../Model/Connect.php");
include("../Model/RegistrationDB.php");
include ("../Controller/registration-php.php");


?>


<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
	    <title>Registration Form</title>
        <link href="registration.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
         <style>
         .error {color: #FF0000;}
        </style>

    </head>
    <body>
        
      


        <div class="registration">                                  
            <div class="container">

                <div class="left">
                 <img src="picture\med1.jpg">

                </div>
                <div class="right">
                    <div class="reg-box">
                      <form method="post" action=" "onsubmit="return validregistration()" >
                            
                             <div class="page-name"><h1>Registration</h1></div>
                            <p><input type="text"  id="fname" name="fname" placeholder="First Name"  > <span class="error"><?php echo $fErr;?></span> </p>
                            <p><input type="text"  id="lname" name="lname" placeholder="Last Name" > <span class="error"><?php echo $lErr;?></span> </p>
                            <p><input type="email"  id="email" name="email" placeholder="E-mali" ><span class="error"><?php echo $EmailErr;?></span> </p>
                            <p><label  >Gender:</label>
                            <input type="radio" name="gender" id="gender" value="Male"><label >Male </label>
                            <input type="radio" name="gender" id="gender" value="Female"><label >Female </label>
                            <input type="radio" name="gender" id="gender" value="Others"><label >Others </label><span class="error"><?php echo $gErr;?></span> </p>
                            <p><input type="text" id="username" name="username" placeholder="User Name"><span class="error"><?php echo $uErr;?></span> </p>
                            <p> <input type="Password" id="pass" name="pass" placeholder="Password"  ><span class="error"><?php echo $PassErr;?></span> </p>
                            <button type="submit" class="submit" name="submit"  ><h1>Register<h1></button><br><br>
                                <div class="do-log">Already have an account?<a href="login.php">Login Here</a></div>
                            
                           
                    </form>
                    </div>
                </div>
                
            </div>
    </div>
     
<script src="../Controller/registration.js"></script>
       </body>
</html>