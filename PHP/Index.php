<!DOCTYPE html>
<?php
   require '../includes/common.php';
   if(isset($_SESSION['email']))
   {
       header('location:Products.php');
   }
?>
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       <link href="../CSS/index.css" rel="stylesheet" type="text/css">
       <title>Index</title>
       <link rel="icon" href="../Images/home.jpg">
       <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
          <?php
            include '../includes/header.php';
          ?>
          <div id="background">
            <center>
            <div id="banner-content">
                <h1>We sell lifestyle</h1>
                 <p>Upto 50% off on all top brands</p>
                 <?php
                   if(isset($_SESSION['id']))
                 {
                 ?>
                 <form action="Products.php">
                     <button type="submit" class="btn btn-primary">Shop Now</button>
                 </form>
                <?php
                }
                else
                    {
                    ?>
                 <form action="Login.php">
                     <button type="submit" class="btn btn-primary">Shop Now</button>
                 </form>
                 <?php 
                 }
                 ?>
            </div>
            </center>
          </div>
          <div class="container">
             <div class="row row_style banner">
              <center>
                    <h1>A glimpse of our products</h1>
              </center>
             </div>
             <div class="row row_style">
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/watch.jpg" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Watches</h1>
                      <p>Best watches from top brands</p>
                   </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/phone.png" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Phones</h1>
                      <p>Choose from a wide variety  of phones</p>
                   </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/lap.jpg" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Laptops</h1>
                      <p>We offer a wide array of powerful laptops</p>
                   </div>
                   </div>
                </div>
                 <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/cam.jpg" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Camera</h1>
                      <p>Dive into the beautiful world of photography</p>
                   </div>
                   </div>
                </div> 
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/shirt.jpg" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Men's Fashion</h1>
                      <p>Suit up to impress</p>
                   </div>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6">
                   <div class="thumbnail">
                   <img src="../Images/dress.jpg" class="img img-thumbnail" alt="Image not available"> 
                   <div class="caption">
                      <h1>Women's Fashion</h1>
                      <p>Keep up with the latest trends in fashion</p>
                   </div>
                   </div>
                </div>  
             </div>
          </div>
          <?php
             include '../includes/footer2.php';
          ?>
    </body>
</html>