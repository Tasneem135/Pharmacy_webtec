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
    <title> Search Order</title>
    <link rel="stylesheet" type="text/css" href="search-order.css">
    <script https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
</head>
<body>
<?php include 'Admin-header.php';?>

<form action="search-order.php" method="post">
    <div class="container">
        <div>
            <hr><h1 style="font-style: italic; color: steelblue;">Customers Orders </h1><hr><br> 
            <input type="text" name="search" class="search" placeholder="Search by Customer name">
            <button class="btn">Search</button>
        </div>
        <div class="success">
            
        </div>


    <table class="table">
        <thead>
        <tr>
            <th> Id</th>
            <th>Customer Name</th>
            <th> Mobile no</th>
            <th>Medicines Name</th>
            <th>Order Date</th>
            <th>DeliveryDate</th>
            <th>Total Cost</th>
            
            
        </tr>
        </thead>
        <tbody>

         <?php
             $search =$_POST['search'];
             $sql = "select * from orders where name like '%$search%' ";
             $result =mysqli_query($con , $sql);
              $count=$result->num_rows;
             if($count>0){

                while($row = mysqli_fetch_assoc($result)){
                    ?>


                    <tr>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo $row['name'] ?></td>
                     <td><?php echo $row['mbl'] ?></td>
                     <td><?php echo $row['medicinename'] ?></td>
                     <td><?php echo $row['orderdate'] ?></td>
                     <td><?php echo $row['deliverydate'] ?></td>
                     <td><?php echo $row['cost'] ?></td>
                    </tr>

              <?php  }
             }
         
            ?>
                   
            
        </tbody>
        
    </table>

<script type="../Controller/Search-AJAX.js"></script>


</body>
</html>