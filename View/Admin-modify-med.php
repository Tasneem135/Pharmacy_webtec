<?php
   include ("../Model/Connect.php");
   session_start();
  if(!isset($_SESSION['username']) && !isset($_SESSION['id']))
{
       header("Location:../View/login.php");
       die();
}
   error_reporting(0);
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title> Medicine Information</title>
    <link rel="stylesheet" type="text/css" href="Mod-med.css">
    <script https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>

</head>
<body>
<?php include 'Admin-header.php';?>

<form action="Admin-modify-med.php" method="post">
    <div class="container">
        <div> 
            <hr><h1 style="font-style: italic; color: steelblue;">Medicines Information </h1><hr><br>
            <input type="text" name="search" class="search" placeholder="Search by medicine name">
            <button class="btn">Search</button>
        </div>
        <div class="success">
            
        </div>

    <table class="table">
        <thead>
        <tr>
            <th>Serial No</th>
            <th>Medicine Name</th>
            <th>Disease</th>
            <th>Company Name</th>
            <th>No Of Medicine</th>
            <th>Price</th>
            <th>Received Date</th>
            <th>Expire Date</th>
            <th>Comment</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>

            <?php
             
             $search =$_POST['search'];
             $sql = "select * from medicine where Name like '%$search%'";
             $result =mysqli_query($con , $sql);
             $count=$result->num_rows;
             if($count>0){

                while($row = mysqli_fetch_assoc($result)){
                    ?>


                    <tr>
                     <td><?php echo $row['SerialNo']; ?></td>
                     <td><?php echo $row['Name'] ?></td>
                     <td><?php echo $row['Disease'] ?></td>
                     <td><?php echo $row['CompanyName'] ?></td>
                     <td><?php echo $row['NoOfMed'] ?></td>
                     <td><?php echo $row['Price'] ?></td>
                     <td><?php echo $row['RecivedDate'] ?></td>
                     <td><?php echo $row['ExpireDate'] ?></td>
                     <td><?php echo $row['Comment'] ?></td>
                     <td>
                         <button class="btn"><a href="update-med.php?updatedid=<?php echo $row['SerialNo']; ?>">Update</a></button>
                     </td>
                     <td>
                         <button class="btn"><a href="../Model/Del-med.php?deletedid=<?php echo $row['SerialNo']; ?>" >Delete</a></button>
                     </td>
                    </tr>

              <?php  }
             }

         
            ?>
        </tbody>
        
    </table>


<script type="../Contoller/Search-AJAX.js"></script>

</script>



</body>
</html>