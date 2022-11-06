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
    <title> Sale Privew</title>
    <link rel="stylesheet" type="text/css" href="privew-sale.css">
    <script https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
</head>
<body>
<?php include 'Admin-header.php';?>

<form action="privew-sale.php" method="post">
    <div class="container">
        <div>
            <hr><h1 style="font-style: italic; color: steelblue;">Sale Preview </h1><hr><br> 
            <input type="text" name="search" class="search" placeholder="Search by Medicine name">
            <button class="btn">Search</button>
        </div>
        <div class="success">
            
        </div>


    <table class="table">
        <thead>
        <tr>
            <th>Serial No</th>
            <th>Medicine Name</th>
            <th>Medicine Was Available</th>
            <th>Total Medicine Available</th>
            
            
        </tr>
        </thead>
        <tbody>
           <?php
             $search =$_POST['search'];
             $sql = "select * from privew where name like '%$search%' ";
             $result =mysqli_query($con , $sql);
              $count=$result->num_rows;
             if($count>0){

                while($row = mysqli_fetch_assoc($result)){
                    ?>


                    <tr>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['name'] ?></td>
                     <td><?php echo $row['medicine-was-available'] ?></td>
                     <td><?php echo $row['medicine-available'] ?></td>
                    </tr>

              <?php  }
             }
         
            ?>
            
        </tbody>
        
    </table>

<script type="../Controller/Search-AJAX.js"></script>


</body>
</html>