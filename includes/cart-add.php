<?php
require 'common.php';
$id = $_GET['id'];
$user = $_SESSION['id'];
$query = "insert into users_items (user_id,product_id,Order_Status) values('$user','$id','Added to Cart')";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
  ?>
<html>
     <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Products</title>
    <link rel="icon" href="../Images/product.png">
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
      <?php
       include 'header.php';
       if($result)
        {
      header('location:../PHP/Products.php');
         }
     else
     { 
     ?>
      <div class="error">Some error has occured</div>
    <?php
     }
      include 'footer.php'
      ?>
  </body>
</html>

