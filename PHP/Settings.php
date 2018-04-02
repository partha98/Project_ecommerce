<!DOCTYPE html>
<?php
   require '../includes/common.php';
?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Settings</title>
    <link rel="icon" href="../Images/settings.png">  
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
                   <h1>Change Password</h1>
                </div>
               <form action="../includes/settings_submit.php" method="POST">
                <div class="form-group">
                   
                      <input type="password" class="form-control" placeholder="Old Password" name="Old-Password">
                  
                </div>
                <div class="form-group">
                  
                      <input type="password" class="form-control" placeholder="New Password" name="New-Password">
                  
                </div>
                <div class="form-group">
                  
                      <input type="password" class="form-control" placeholder="Re-type New Password" name="Re-Password">
                  
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Change</button>
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