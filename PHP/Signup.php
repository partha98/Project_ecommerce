<!DOCTYPE html>
<?php
   require '../includes/common.php';
?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>SignUp</title>
    <link rel="icon" href="../Images/User.jpg">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">                      
  </head>
  <body>
          <?php
            include '../includes/header.php';
          ?>
    <div class="container">
        <div class="row spacing">
           <div class="col-md-6 col-md-offset-3">
                <div class="row">
                   <h1>SIGN UP</h1>
                </div>
               <form action="../includes/signup_sumbit.php" method="post">
                <div class="form-group row">
                      <input text="text" class="form-control" placeholder="Name" name="name">
                   
                </div>
                <div class="form-group row">
                   
                      <input type="email" class="form-control" placeholder="Email" name="email">
       
                   
                </div>
                <div class="form-group row">
                   
                      <input type="password" class="form-control" placeholder="Password" name="pass">
                   
                </div>
                <div class="form-group row">
                   
                      <input type="number" class="form-control" placeholder="Contact" name="contact">
                   
                </div>
                <div class="form-group row">
                   
                      <input type="text" class="form-control" placeholder="City" name="city">
                   
                </div>
                <div class="form-group row">
                  
                      <input type="text" class="form-control" placeholder="Address" name="add">
                   
                </div>
                <div class="form-group row">
                      <input type="submit" class="btn btn-primary">
                </div>
                </form>
           </div>
        </div>
    </div>
     <?php
          include '../includes/footer.php';
    ?>
  </body>
</html>