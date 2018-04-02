<!DOCTYPE html>
<?php
    require '../includes/common.php';
?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Login</title>
    <link rel="icon" href="../Images/login.jpg">  
    <link rel="stylesheet" type="text/css" href="../CSS/index.css">   
    <meta name="viewport" content="width=device-width, initial-scale=1">                      
  </head>
  <body>
         <?php
            include '../includes/header.php';
          ?>
    <div class="container">
       <div class="row">
            <div class="col-md-6 col-md-offset-3">
               <div class="panel panel-primary spacing">
                  <div class="panel-heading">
                      <h1>LOGIN</h1> 
                  </div>
                  <div class="panel-body">
                      <?php
                        if(isset($_GET['error']))
                        {
                      ?>
                      <i>Either email or password entered is wrong</i>
                      <?php
                        echo "<br>";
                        }
                        ?>
                      <form action="../includes/login_submit.php" method="post">
                      <div class="row form-group row-style">
                          
                            
                                 <input type="email" class="form-control" placeholder="Email" name="email">
                            
                          
                      </div>
                      <div class="row form-group row-style">
                         
                            
                                 <input type="password" class="form-control" placeholder="Password" name="pass">     
                             
                      </div>
                      <div class="row form-group row-style">
                             
                          <button type="submit" class="btn btn-primary">Login</button>    
                            
                      </div>
                      </form>

                  </div>
                  <div class="panel-footer">
                     <div class="row row-style">
                        <p>Dont have an account?<a href="SignUp.php"> Resgister here</a></p>
                     </div>
                  </div>
               </div>
            </div>
       </div>
    </div>
</div>
     <?php
          include '../includes/footer.php';
    ?>
  </body>
</html>