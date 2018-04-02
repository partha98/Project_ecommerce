<!DOCTYPE html>
<?php
   require '../includes/common.php';
   $user = $_SESSION['id'];
   $query = "Update users_items set Order_Status='Confirmed' where user_id='$user' and Order_Status='Added to Cart'";
   $result = mysqli_query($con,$query) or die(mysqli_error($con));
?>
 <html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SignUp</title>
    <link rel="icon" href="../Images/tick.png">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">                      
  </head>
  <body>
         <?php
            include '../includes/header.php';
          ?>
    <div class="container spacing">
        <div class="row">
           <div class="col-md-12">
             <h1>Your Order has been successfully placed</h1>
             <p>Thank you for choosing us</p>
             <a href="Products.php"><button type="button" class="btn btn-primary">Go back to Products page</button></a>
           </div>
        </div>
    </div>
    <?php
          include '../includes/footer.php';
    ?>
  </body>
</html>