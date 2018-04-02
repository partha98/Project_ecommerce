<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Cart</title>
    <link rel="icon" href="../Images/cart.jpg">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">                      
  </head>
  <body>
<?php
  require 'common.php';
  include 'header.php';
  $id = $_GET['id'];
  $user = $_SESSION['id'];
  $query = "delete from users_items where user_id='$user' and product_id='$id'";
  $result = mysqli_query($con, $query) or die(mysqli_error($con));
  if($result)
  {
     header('location:../PHP/Cart.php'); 
  }
  else
  {
   ?>
      <div class="error">Some error has occured</div>
  <?php   
  }
  include 'footer.php';
?>
  </body>
</html>