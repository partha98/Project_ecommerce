<!DOCTYPE html>
<?php
   require '../includes/common.php';
   function check_if_add($con,$id)
   {
  $user = $_SESSION['id'];
  $query = "select * from users_items where product_id='$id' and user_id ='$user' and Order_Status='Added to Cart'";
  $result = mysqli_query($con,$query) or die(mysqli_error($con));
  $count = mysqli_num_rows($result);
  if($count==0)
  {
      $flag=1;
  }
  else
  {

     $flag=2;

  }
  return $flag;
}

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
            include '../includes/header.php';
       ?>
      <div class="container">
       <div id="product-banner">
          <center>
            <h1>Welcome to Lifestyle Store!</h1>
            <p>We have the best products all in one place so that you dont have to hunt around</p>
          </center>
       </div>
       <div class="banner product-banner-content">
           <h2>Watches</h2>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-1.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Carson Analogue Blue Dial Men'S Watch- Cr1535</h3>
          <p>Rs 449.00</p>
          </center>
        <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,1);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=1"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-2.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Skmei Analogue-Digital Dial Men's Watch - 1016</h3>
          <p>Rs 645.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,2);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=2"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-3.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Skmei Analogue-Digital Black Dial Watch - 5590</h3>
          <p>Rs 3,795.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,3);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=3"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-4.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Casio Enticer Analog Black Dial Men's Watch</h3>
          <p>Rs 3,795.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,4);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=4"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-5.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>G-Shock Analog-Digital Green Dial Men's Watch</h3>
          <p>Rs 8,495.00</p>
          </center>
         <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,5);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=5"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-6.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Geneva Platinum Analog Women's Watch - GP-083</h3>
          <p>Rs 299.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,6);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=6"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-7.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Fastrack Analog Women's Watch-6078SL06(RED)</h3>
          <p>Rs 1,615.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,7);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=7"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/watch-8.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Swiss Eagle Women's Watch - SE-9085LS-RG-08</h3>
          <p>Rs 7,160.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,8);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=8"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       </div>
      <div class="container">
      <div class="product-banner-content new-banner">
          <h1>Phones</h1>
      </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-1.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Redmi 4A (16GB,2GB RAM)</h3>
          <p>Rs 5,999.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,9);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=9"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-2.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Lenovo Vibe K5 (Gold, Snapdragon)</h3>
          <p>Rs 5,765.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,10);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=10"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-3.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Vivo Y55S (16 GB,3 GB RAM,White)</h3>
          <p>Rs 11,790.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,11);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=11"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
           <img class="img" src="../Images/phone-4.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>OnePlus 3T(6GB RAM,64GB)</h3>
          <p>Rs 29,999.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,12);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=12"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-5.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Samsung Galaxy S7 Edge(128 GB)</h3>
          <p>Rs 59,999.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,13);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=13"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-6.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Samsung Galaxy J7 Prime(16GB)</h3>
          <p>Rs 15,490.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,14);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=14"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-7.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Apple iPhone 7 (Black/White, 32GB)</h3>
          <p>Rs 45,789.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,15);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=15"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/phone-8.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Micromax YU Yureka Plus(2GB RAM)</h3>
          <p>Rs 7,100.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,16);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=16"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
     </div>
     <div class="container">
      <div class="product-banner-content new-banner">
          <h1>Laptops</h1>
      </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-1.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>HP 15-be016TU 15.6 inch laptop(8GB)</h3>
          <p>Rs 55,290.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,17);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=17"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-2.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Apple MacBook Air MMGF2HN(4GB)</h3>
          <p>Rs 26,490.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,18);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=18"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
         <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-3.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Micromax Canvas 11.6 inch Laptop</h3>
          <p>Rs 8,990.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,19);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=19"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
           <img class="img" src="../Images/lap-4.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Lenovo Ideapad 310 (80TJ00BNIH)</h3>
          <p>Rs 48,999.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,20);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=20"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-5.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>AsusFX553(RAM 16GB,i7 6th)</h3>
          <p>Rs 72,600.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,21);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=21"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-6.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Asus GL552VX-DM261T(16GB)</h3>
          <p>Rs 81,400.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,22);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=22"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-7.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Dell Alienware 13 Y560901IN9</h3>
          <p>Rs 1,10,491.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,23);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=23"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/lap-8.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>MSI Titan Pro 4K GT73 VR7R</h3>
          <p>Rs 3,34,990.00</p>
          </center>
         <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,24);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=24"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
     </div>
     <div class="container">
      <div class="product-banner-content new-banner">
          <h1>Cameras</h1>
      </div>
       <div class="col-md-3 col-sm-6">
            <div class="thumbnail">
                <img class="img" src="../Images/cam-1.jpg" alt="Image not available">
             <div class="caption">
                <center>
                  <h3>Canon EOS 1300D</h3>
                  <p>Rs 21,949.00</p>
                </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,25);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=25"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
            </div>
            </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
           <img class="img" src="../Images/cam-2.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Nikon D330 24.2MP</h3>
          <p>Rs 25,899.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,26);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=26"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
           <img class="img" src="../Images/cam-3.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Sony DSC W830</h3>
          <p>Rs 7,800.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,27);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=27"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
           <img class="img" src="../Images/cam-4.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Canon EOS 30.4MP</h3>
          <p>Rs 2,85,000.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,28);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=28"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/cam-5.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Nikon Coolpix L340 20.2MP Camera</h3>
          <p>Rs 10,950.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,29);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=29"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/cam-6.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Canon EOS 700D 18MP DSLR camera</h3>
          <p>Rs 36,949.00</p>
          </center>
           <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,30);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=30"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/cam-7.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Nikon D3400 Digital Camera(lens)</h3>
          <p>Rs 40,490.00</p>
          </center>
          <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,31);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=31"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
       <div class="col-md-3 col-sm-6">
       <div class="thumbnail">
          <img class="img" src="../Images/cam-8.jpg" alt="Image not available">
          <div class="caption">
          <center>
          <h3>Sony Alpha A68K 24.2MP Camera</h3>
          <p>Rs 49,650.00</p>
          </center>
         <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,32);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=32"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
          </div>
       </div>
       </div>
     </div>
     <div class="container">
        <div class="product-banner-content new-banner">
            <h1>Men's Fashion</h1>
        </div>
        <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-1.jpg">
              <div class="caption">
                  <center>
                  <h3>Pearl Ocean Men's Satin</h3>
                  <p>Rs 699.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,33);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=33"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-2.jpg">
              <div class="caption">
                  <center>
                  <h3>Ven Heusen Formal Shirt</h3>
                  <p>Rs 2,681.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,34);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=34"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-3.jpg">
              <div class="caption">
                  <center>
                  <h3>Gant's X-Striped Shirt( limited)</h3>
                  <p>Rs 4,788.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,35);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=35"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-4.jpg">
              <div class="caption">
                  <center>
                  <h3>Wrangler Men's Polo(Yellow)</h3>
                  <p>Rs 976.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,36);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=36"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-5.jpg">
              <div class="caption">
                  <center>
                  <h3>Bloos Jeans Men's Casual trousers</h3>
                  <p>Rs 629.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,37);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=37"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-6.jpg">
              <div class="caption">
                  <center>
                  <h3>Wrangler Men's Skanders Slim Fit</h3>
                  <p>Rs 1,223.00</p>
                  </center>
                 <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,38);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=38"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-7.jpg">
              <div class="caption">
                  <center>
                  <h3>XIANGUO Men's Leather Belt</h3>
                  <p>Rs 3,010.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,39);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=39"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/shirt-8.jpg">
              <div class="caption">
                  <center>
                  <h3>Leatherkraft Men's Blue Denim Loafers</h3>
                  <p>Rs 449.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,40);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=40"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
     </div>
     <div class="container">
        <div class="product-banner-content new-banner">
            <h1>Women's Fashion</h1>
        </div>
        <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-1.jpg">
              <div class="caption">
                  <center>
                  <h3>Royal Export Women's Georgette</h3>
                  <p>Rs 999.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,41);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=41"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-2.jpg">
              <div class="caption">
                  <center>
                  <h3>Karigari Women's Kurta(266870126)</h3>
                  <p>Rs 584.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,42);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=42"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-3.jpg">
              <div class="caption">
                  <center>
                  <h3>Siyaram Creation Cotton Dress</h3>
                  <p>Rs 999.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,43);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=43"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-4.jpg">
              <div class="caption">
                  <center>
                  <h3>Levi's Skinny Jeans (28761-0006)</h3>
                  <p>Rs 1,799.00</p>
                  </center>
                   <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,44);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=44"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-5.jpg">
              <div class="caption">
                  <center>
                  <h3>United Colors of Benetton Women's Skinny Pants</h3>
                  <p>Rs 1,159.00</p>
                  </center>
                 <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,45);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=4"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-6.jpg">
              <div class="caption">
                  <center>
                  <h3>Diana Korr Womens's Shoulder Bag Handbag</h3>
                  <p>Rs 1,479.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,46);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=46"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-7.jpg">
              <div class="caption">
                  <center>
                  <h3>Lavie Football Women's Handbag (Amber)</h3>
                  <p>Rs 1,639.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,47);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=47"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
         <div class="col-md-3 col-sm-6">
           <div class="thumbnail">
              <img class="img" src="../Images/dress-8.jpg">
              <div class="caption">
                  <center>
                  <h3>SHUZ TOUCH Black PumpsPeeptoes limited</h3>
                  <p>Rs 1,274.00</p>
                  </center>
                  <?php
           if(!isset($_SESSION['email']))
            {
             $status = "Login to Buy";
          ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
           <?php
            }
             else
             {
              $flag = check_if_add($con,48);
              if($flag==1)
              {
                  $status='Add to Cart';
            ?>
              <a href="../includes/cart-add.php?id=48"><button class="btn btn-primary btn-block" type="button" ><?php echo $status;?></button></a>
             <?php
              }
              else
                  {
                  $status = "Added to Cart";
             ?>
              <a href="Login.php"><button class="btn btn-primary btn-block" type="button" disabled><?php echo $status;?></button></a>
              <?php
                  }
             }
              ?>
              </div>
           </div>
        </div>
     </div>
    <?php
             include '../includes/footer2.php';
     ?>
  </body>
</html>