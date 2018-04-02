<!DOCTYPE html>
<nav class="navbar navbar-inverse navbar-fixed-top">
           <div class="container">
                <div class="navbar-header">
                  <button class="navbar-toggle" data-toggle="collapse" data-target="#links">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a href="Index.php" class="navbar-brand">Store</a>
                </div>
                <div class="collapse navbar-collapse" id="links">
                  <ul class="nav navbar-nav navbar-right">
                       <?php
                        if(isset($_SESSION['email']))
                        {
                       ?>
                      <li><a href="../PHP/Cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                       <li><a href="../PHP/Settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                       <li><a href="../includes/Logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        <?php 
                        }
                        else
                        {
                       ?>   
                     <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> SignUp</a></li>
                     <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                     <?php 
                        }
                        ?>
                  </ul>   
                </div>
           </div>
         </nav>