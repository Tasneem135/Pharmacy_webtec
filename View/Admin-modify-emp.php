<?php
   include ("../Model/Connect.php");
   session_start();
  if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
{
       header("Location: ../View/login.php");
       die();
}
   error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Employee Information</title>
    <link rel="stylesheet" type="text/css" href="Mod-emp.css">
    <script https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
</head>
<body>
<?php include 'Admin-header.php';?>

<form action="Admin-modify-emp.php" method="post">
    <div class="container">
        <div> 
            <hr><h1 style="font-style: italic; color: steelblue;">Employees Information </h1><hr><br>
            <input type="text" name="search" class="search" placeholder="Search by first name">
            <button class="btn">Search</button>
        </div>
        <div class="success">
        </div>

    <table class="table">
        <thead>
        <tr>
            <th>Employee ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>E-mail</th>
            <th>Mobile No</th>
            <th>Gender</th>
            <th>Staring Time</th>
            <th>Closing Time</th>
            <th>Salary</th>
            <th>Resigtration Date</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

            <?php
             $search =$_POST['search'];
             $sql = "select * from emp where FirstName like '%$search%'";
             $result =mysqli_query($con , $sql);
             $count=$result->num_rows;
             if($count>0){

                while($row = mysqli_fetch_assoc($result)){
                    ?>


                    <tr>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['FirstName'] ?></td>
                     <td><?php echo $row['LastName'] ?></td>
                     <td><?php echo $row['Email'] ?></td>
                     <td><?php echo $row['Mobile'] ?></td>
                     <td><?php echo $row['Gender'] ?></td>
                     <td><?php echo $row['StartTime'] ?></td>
                     <td><?php echo $row['LastTime'] ?></td>
                     <td><?php echo $row['Salary'] ?></td>
                     <td><?php echo $row['RegistrationTime'] ?></td>
                     <td>
                         <button class="btn"><a href="update-emp.php?updatedid=<?php echo $row['id']; ?>">Update</a></button>
                     </td>
                     <td>
                         <button class="btn"><a href="../Model/Del-emp.php?deletedid=<?php echo $row['id']; ?>">Delete</a></button>
                     </td>
                    </tr>

              <?php  }
             }
         
            ?>
        </tbody>


        <script type="../Controller/Search-AJAX.js"></script>


        
    </table>
</body>
</html>