<!DOCTYPE html>
<?php
   require '../includes/common.php';
?>
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
            include '../includes/header.php';
            if(!isset($_SESSION['email']))
            {
                header('location:index.php');
            }
          ?>
   
         <?php
            $user = $_SESSION['id'];
            $query = "select * from users_items inner join items on users_items.product_id=items.pid where user_id='$user' and Order_Status='Added to Cart'";
            $result = mysqli_query($con, $query) or die(mysqli_error($con));
            $count = mysqli_num_rows($result);
            $total=0;
            $count1=1;
            if($count==0)
            {
            ?>
          <div class="error">No products currently added to cart</div>
          <?php
            }
           else 
           {
         ?>
          <div class="container spacing">
          <div class="row row-style">
          <table class="table table-striped">
              <tbody>
                 <tr>
                    <th>Item number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                 </tr>
                 <?php
                   while($row= mysqli_fetch_array($result))
                   {
                 ?>
                    <tr>
                        <td><?php echo $count1; ?></td>
                        <td><?php echo $row['name_of_product']; ?></td>
                        <td><?php echo "Rs ".$row['price'];
                             $total = $total + $row['price'];
                             $pid = $row['pid'];
                            ?></td>
                        <td><?php echo"<a href='../includes/cart-remove.php?id={$row['pid']}'>".'<button class="btn btn-primary">'."Remove item".'</button>'."</a>"; ?></td>
                    </tr>
                 <?php
                   $count1++;
                   }
                   ?>
                 <tr>
                     <td></td>
                     <td><b>Total</b></td>
                     <td>Rs <?php echo $total; ?></td>
                    <td><a href="Success.php"><button type="button" class="btn btn-primary">Confirm Order </button></a></td>
                 </tr>
              </tbody>
          </table>
          </div>
          </div>
     <?php
           }
          include '../includes/footer.php';
    ?>
  </body>
</html>