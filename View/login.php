<?php
session_start();
include("../Model/Connect.php");
include ("../Model/LoginDB.php");
include ("../Controller/login-php.php");

?>


<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login </title>
        <link href="login.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
   <style >      
.error {color: #FF0000;}
</style>
 
    </head>
    <body>





     
        <div class="login-form">
            <div class="containers">
                <div class="log-box">
        
                   <form method="POST" action=" ">
                      <div class="titlee"><h1>Login<h1></div><br>

                      <input type="text"  id="username" name="username" class="username" placeholder="Username" required=""
                       value="<?php if(isset($_COOKIE['usercookie'])){ echo $_COOKIE['usercookie']; } ?>">
                      <span class="error"><?php echo $uErr;?></span> <br><br>

                      <input type="Password" id="pass" name="pass" class="pass" placeholder="Password"  required=" " 
                      value="<?php if(isset($_COOKIE['passcookie'])){ echo $_COOKIE['passcookie']; } ?>" >
                      <span class="error"><?php echo $PassErr;?></span><br><br>
                      <input type="checkbox"  name="remember" class="cbox" ><span>Remember me</span>
                      <button type="submit" class="submit" name="submit" ><h1>Log In</h1></button><br><br>
                    <div class="do-reg">Don't have an account?<a href="Admin-reg.php">Register Here</a></div>
                  </form>
               </div>                                  
           </div>
       </div>

     </body>
</html>